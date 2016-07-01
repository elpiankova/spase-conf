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
    function requestAuthors()
    {
        $authors =[];
        $organization_has_authors =[];

        foreach ($this->authors as $author){
            $organization_has_authors[$author->organization_id][] = $author->id;
            $authors[$author->id] = $author->requestName();
        }

        if ($authors and $organization_has_authors) {
            if (count($organization_has_authors) > 1) {
                $result = '';
                $organization_counter = 1;
                foreach ($organization_has_authors as $authors_list){
                    foreach ($authors as $author_id=>$author_name){
                        if (in_array($author_id, $authors_list)) {
                            $result .= $author_name.' '.$organization_counter.' ';
                        }
                    }
                    $organization_counter += 1;
                }
            } else {
                $result = implode(', ', $authors);
            }
            return $result;
        }
    }

    public
    function requestOrganizations()
    {
        $organizations =[];

        foreach ($this->authors as $author){
            $organizations[$author->organization_id] = $author->requestOrganization();
        }
        if(count($organizations)>1){
            $result = '';
            $organization_counter = 1;
            foreach ($organizations as $organization){
                $result .= $organization_counter.' '.$organization.'<br />';
                $organization_counter += 1;
            }
        } else {
            $result = implode('<br />', $organizations);
        }
        return $result;
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
