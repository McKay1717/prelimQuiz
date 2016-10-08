<nav class="navbar navbar-dark navbar-fixed-top scrolling-navbar bg-transparent">
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx2">
        <i class="fa fa-bars"></i>
    </button>
    <div class="container">
        <div class="collapse navbar-toggleable-xs" id="collapseEx2">
            <a class="navbar-brand" href="/" style="font-weight: 100"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>&nbsp Back </a>
            <a class="navbar-brand" style="float: right;font-weight: 100 " href="/index/instructions"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp Instruction</a>
        </div>
    </div>
</nav>

<div class="view hm-black-light">
    <div class="full-bg-img flex-center" >
        <form action="/admin/register" method="POST">
            <ul  style="margin: 40px">
                <li style="margin: 40px">
                    <h1 class="h1-responsive wow fadeInUp title" >Admin Registration</h1></li>
                <li>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="md-form">
                                <input type="text" id="form1" class="form-control" name="username">
                                <label for="form1">Username</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="md-form">
                                <input type="text" id="form2" class="form-control" name="name">
                                <label for="form1">Name</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="md-form">
                                <input type="text" id="form3" class="form-control" name="email">
                                <label for="form2">Email</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="md-form">
                                <input type="password" id="form4" class="form-control" name="password">
                                <label for="form3">Password</label>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="md-form">
                        <button type="submit" class="btn btn-default btn-rounded">Register</button>
                    </div>
                </li>
            </ul>
        </form>
    </div>
</div>