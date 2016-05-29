    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-7 col-xs-7">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{$user}}</h3>

                        <p>Зареєстрованих користувачів </p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="admin/user_infos" class="small-box-footer">Детальніше <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-5 col-xs-5">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{$reqest}}</h3>

                        <p>Заявок на конференцію</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="admin/conferequests" class="small-box-footer">Детальніше <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="nav-tabs-custom">
                    <!-- Tabs within a box -->
                    <ul class="nav nav-tabs pull-right">
                        <li class="pull-left header"><i class="fa fa-inbox"></i> Кількість користувачів</li>
                    </ul>
                    <div class="tab-content no-padding">
                        <!-- Morris chart - Sales -->
                        <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                        <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
                    </div>
                </div>
                <!-- /.nav-tabs-custom -->
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">

                <!-- Map box -->
                <div class="box box-solid bg-light-blue-gradient">
                    <div class="box-header">
                        <i class="fa fa-map-marker"></i>

                        <h3 class="box-title">
                            Країни
                        </h3>
                    </div>
                    <div class="box-body">
                        <div id="world-map" style="height: 250px; width: 100%;"></div>
                    </div>
                </div>
                <!-- /.box -->
            </section>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
    </section>
    <!-- jQuery 2.2.0 -->
    <script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.6 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script>
        //jvectormap data
        var visitorsData = {!! $user_map !!};
        var area = new Morris.Area({
            element: 'revenue-chart',
            resize: true,
            data: [
                {"y": "2016 Q0", "item1": 0},
                {"y": "2016 Q1", "item1": 1},
                {"y": "2016 Q2", "item1": 2},
                {"y": "2016 Q3", "item1": 8},
                {"y": "2016 Q4", "item1": 12},
                {"y": "2016 Q5", "item1": 13},
                {"y": "2016 Q6", "item1": 14},
                {"y": "2016 Q7", "item1": 20},
                {"y": "2016 Q8", "item1": 21},
                {"y": "2016 Q9", "item1": 22}
            ],
            {{--data: [@foreach($user_graf as $user_g){!! $user_g !!} , @endforeach],--}}
            xkey: 'y',
            ykeys: ['item1'],
            labels: ['Item 1'],
            lineColors: ['#3c8dbc'],
            hideHover: 'auto'
        });
        console.info(visitorsData)
    </script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="assets/js/dashboard.js"></script>