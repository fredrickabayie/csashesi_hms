<!DOCTYPE html>
<html lang="en">
<head>

    {{--| HEAD |--}}
    @include('includes.head')

</head>

<body>

{{--| NAVIGATION BAR |--}}
<header id="header" class="clearfix" data-spy="affix" data-offset-top="65">
    @include('includes.header')
</header>

{{--| SIDEBAR |--}}
@include('includes.sidebar')

{{--| MAIN CONTENT |--}}
<section id="content">
    <div class="container">
        @yield('content')
    </div>
</section>

{{--| FOOTER |--}}
<footer id="footer">
    @include('includes.footer')
</footer>


<!-- Javascript Libraries -->
{!! Html::script('vendors/bower_components/jquery/dist/jquery.min.js') !!}
{!! Html::script('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}
{!! Html::script('vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') !!}
{!! Html::script('vendors/sparklines/jquery.sparkline.min.js') !!}
{!! Html::script('vendors/bootstrap-growl/bootstrap-growl.min.js') !!}
{!! Html::script('vendors/bower_components/jquery.bootgrid/dist/jquery.bootgrid-override.min.js') !!}
{!! Html::script('vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') !!}
{!! Html::script('vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') !!}
{!! Html::script('vendors/bower_components/moment/min/moment.min.js') !!}
{!! Html::script('js/functions.js') !!}
{!! Html::script('js/demo.js') !!}

        <!-- Data Table -->
<script type="text/javascript">
    $(document).ready(function () {
        //Command Buttons
        $("#data-table-command").bootgrid({
            css: {
                icon: 'zmdi icon',
                iconColumns: 'zmdi-view-module',
                iconDown: 'zmdi-expand-more',
                iconRefresh: 'zmdi-refresh',
                iconUp: 'zmdi-expand-less'
            },
            selection: true,
            multiSelect: true,
            rowSelect: true,
            keepSelection: true,
            formatters: {
                "commands": function (column, row) {
                    return "<button type=\"button\" class=\"btn btn-icon btn-success command-view\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-zoom-in\"></span></button> " +
                            "<button type=\"button\" class=\"btn btn-icon btn-info command-edit\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-edit\"></span></button> " +
                            "<button type=\"button\" class=\"btn btn-icon btn-danger command-delete\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-delete\"></span></button>";
                }
            }
        });
    });
</script>

</body>
</html>