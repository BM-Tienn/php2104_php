<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Login Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--custom style-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="{{ asset('/css/mypage/admin.css') }}" rel="stylesheet">
    
    </head>
    <body>
        <div class="container-fluid bg-secondary menu sticky-top" style="background-color:rgb(8, 8, 150) !important">
            <div class="row">
                @include('layouts.themes.admin.sticky')
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    <!-- A vertical navbar -->
                    @include('layouts.themes.admin.sidebar')
                </div>
                <div class="col-sm-10">
                    <main>
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>


        <script type="text/javascript">
            var acontent = document.querySelectorAll('.accordion-content');
            var atitle = document.querySelectorAll('.accordion-content .title');

            for (i = 0; i < atitle.length; i++) {
                atitle[i].onclick=function() {
                    var contentClass = this.parentNode.className;
                    
                    for (i = 0; i < acontent.length; i++) {
                        acontent[i].className = 'accordion-content hide';
                    }
                    if (contentClass == 'accordion-content hide') {
                        this.parentNode.className = 'accordion-content show';
                    }
                }
            }
        </script>
    </body>
</html>