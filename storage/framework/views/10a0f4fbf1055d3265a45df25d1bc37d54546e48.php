<nav class="navbar navbar-expand-lg navbar-light bg-light" style=" overflow : hidden; position: fixed; top: 0px; width: 100%">

    <?php if(Auth::Check()): ?>
    <a class="navbar-brand" href="/TravelAndTour/public/profile">
    <img src="http://localhost/TravelAndTour/public/uploades/<?php echo e(Auth::user()->photo); ?>" width='50' height='50' style='border-radius: 50%;'>
    <?php echo e(Auth::user()->name); ?></a>
    <?php endif; ?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/TravelAndTour/public/welcome">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <?php if(Auth::Check()): ?>
            <?php if(Auth::user()->type_id==1): ?>
                <a class="nav-link" href="/TravelAndTour/public/createPost">Post<span class="sr-only">(current)</span></a>
            <?php else: ?>
                <a class="nav-link" href="/TravelAndTour/public/createTripPlan">Create Trip<span class="sr-only">(current)</span></a>
            <?php endif; ?>
            <?php endif; ?>
            </li>

            <?php if(Auth::Check()): ?>
            <?php if(Auth::user()->type_id==2): ?>
            <li class="nav-item">
                <a class="nav-link" href="/TravelAndTour/public/bookingList">Booking list<span class="sr-only">(current)</span></a>
            </li>
            <?php endif; ?>
            <?php endif; ?>
            
            <li class="nav-item">
                <?php if(Auth::Check()): ?>
                    <a class="nav-link" href="/TravelAndTour/public/logout">Log Out<span class="sr-only">(current)</span></a>
                <?php else: ?>
                    <a class="nav-link" href="/TravelAndTour/public/login">Log In <span class="sr-only">(current)</span></a>
                <?php endif; ?>
            </li>

            <?php if(!Auth::Check()): ?>
            <li class="nav-item">
                <a class="nav-link" href="/TravelAndTour/public/register">Register<span class="sr-only">(current)</span></a>
            <li class="nav-item">
            <?php endif; ?>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>