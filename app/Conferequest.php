<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conferequest extends Model
{
    protected $table = 'conferequests';


    public function authors()
    {
        return $this->hasMany('App\Conferauthor', 'conferequests_id');
    }


    public
    function requestAuthorsOrganizations()
    {
        $authors =[];
        $organization_has_authors =[];
        $organizations = [];

        foreach ($this->authors as $author){
            $organization_has_authors[$author->organization_id][] = $author->id;
            $authors[$author->id] = $author->requestName();
            $organizations_temp[$author->id] = $author->requestOrganization();
        }

        if ($authors and $organization_has_authors) {
            if (count($organization_has_authors) == 1){

                return array($authors, array_unique($organizations_temp));
            }
            elseif (count($organization_has_authors) > 1) {
                $organization_numbers = [];
                $organization_number = 1;

                foreach ($authors as $author_id => $author_name){
                    foreach ($organization_has_authors as $organization_id=>$author_list){
                        if(in_array($author_id, $author_list)){
                            if(!in_array($organization_id, array_keys($organization_numbers))){
                                $organization_numbers[$organization_id] = $organization_number;
                                $organizations[] = $organization_number.' '.$organizations_temp[$author_id];
                                $organization_number ++;
                            }
                            $authors[$author_id] .= $organization_numbers[$organization_id];
                        }
                    }
                }
                return array($authors, $organizations);
            } //else return array([],[]);
        }
    }

    public
    function formattedAuthors(){
        $authors = $this->requestAuthorsOrganizations()[0];
        if($authors)
            return implode(', ', $authors);
    }

    public
    function formattedOrganizations()
    {
        $organizations = $this->requestAuthorsOrganizations()[1];
        if($organizations)
            return implode('<br />', $organizations);
    }

    public
    function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public
    function requestUser($id)
    {
        if ($user = User::where('id', $id)->first()) {
            $first_name = mb_substr(mb_strtoupper($user->first_name), 0, 1,'utf-8');
            $middle_name = mb_substr(mb_strtoupper($user->middle_name), 0, 1,'utf-8');
            $last_name = ucfirst($user->last_name);
            $name = $first_name.'.'.$middle_name.'. '.$last_name;
            return $name;
        }
        return 'Немає користувача';
    }
    public
    function emailUser($id)
    {
        if ($user = User::where('id', $id)->first()) {
            return $user->email;
        }
        return 'Немає email';
    }

    public
    function user_info()
    {
        return $this->belongsTo(UserInfo::class, 'user_id', 'user_id');
    }
    public
    function section()
    {
        return $this->belongsTo(Сategory::class, 'section_id');
    }
}
