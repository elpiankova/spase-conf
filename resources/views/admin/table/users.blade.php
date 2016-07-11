<div class="row">
    <div class="col-lg-4 col-xs-4 col-lg-offset-4 col-xs-offset-4">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">

                <p>Завантажити список зареєстрованих користувачів </p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="/{{$file_name}}" class="small-box-footer" download>Завантажити <i class="fa fa-download fa-5"></i></a>
        </div>
    </div>

</div>
<table class="table-primary table table-striped datatables dataTable no-footer">
    <thead>
    <tr>
        <th>Ім'я</th>
        <th>Прізвище</th>
        <th>По-батькові</th>
        <th>email</th>
        <th>Телефон</th>
        <th>Країна</th>
        <th>Місто</th>
        <th>Організація</th>
    </tr>
    </thead>
    <tbody>

    @foreach($users as $user)
        <tr>
            <th>{{$user->first_name}}</th>
            <th>{{$user->middle_name}}</th>
            <th>{{$user->last_name}}</th>
            <th>{{$user->email}}</th>
            <th>{{$user->phone}}</th>
            <th>{{$user->usercountry($user->country_id)}}</th>
            <th>{{$user->usercity($user->city_id)}}</th>
            <th>{{$user->userorganization($user->organization_id)}}</th>
        </tr>
    @endforeach
    </tbody>
</table>