<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img alt="Brand" src="...">
      </a>
    </div>

    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          Home page</a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          About us</a>
          <ul class="dropdown-menu">
            <li><a href="{{ $app['url']->route('about', ['name'=> 'mission']) }}">Mission</a></li>
            <li><a href="{{ $app['url']->route('about', ['name'=> 'founder']) }}">Founder</a></li>
            <li><a href="{{ $app['url']->route('about', ['name'=> 'team']) }}">Team</a></li>
            <li><a href="{{ $app['url']->route('about', ['name'=> 'partners']) }}">Partners</a></li>
            <li><a href="{{ $app['url']->route('about', ['name'=> 'contact-us']) }}">Contact Us</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          Our Programmes</a>
          <ul class="dropdown-menu">
            <li><a href="{{ $app['url']->route('programmes', ['name'=> 'curriculum']) }}">Curriculum</a></li>
            <li><a href="{{ $app['url']->route('programmes', ['name'=> 'professional-development']) }}">Professional Development (Train the trainer)</a></li>
            <li><a href="{{ $app['url']->route('programmes', ['name'=> 'resources']) }}">Resources</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          Upcoming Events</a>
          <ul class="dropdown-menu">
            <li><a href="{{ $app['url']->route('programmes', ['name'=> 'past-events']) }}">Past Events</a></li>
            <li><a href="{{ $app['url']->route('programmes', ['name'=> 'hackathons']) }}">Hackathons</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          News</a>
          <ul class="dropdown-menu">
            <li><a href="{{ $app['url']->route('programmes', ['name'=> 'community']) }}">Community</a></li>
            <li><a href="{{ $app['url']->route('programmes', ['name'=> 'research']) }}">Research</a></li>
            <li><a href="{{ $app['url']->route('programmes', ['name'=> 'technology-in-schools']) }}">Technology in Schools</a></li>
            <li><a href="{{ $app['url']->route('programmes', ['name'=> 'podcasts']) }}">Podcasts</a></li>
            <li><a href="{{ $app['url']->route('programmes', ['name'=> 'press-kits']) }}">Press Kits</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          More</a>
          <ul class="dropdown-menu">
            <li><a href="{{ $app['url']->route('more', ['name'=> 'recognition']) }}">Recognition</a></li>
            <li><a href="{{ $app['url']->route('more', ['name'=> 'annual-report']) }}">Annual Report</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          Get Involved</a>
          <ul class="dropdown-menu">
            <li><a href="{{ $app['url']->route('get-involved', ['name'=> 'job-opening']) }}">Job opening</a></li>
            <li><a href="{{ $app['url']->route('get-involved', ['name'=> 'volunteer']) }}">Volunteer</a></li>
            <li><a href="{{ $app['url']->route('get-involved', ['name'=> 'corporations']) }}">Corporations</a></li>
            <li><a href="{{ $app['url']->route('get-involved', ['name'=> 'partner']) }}">Partner</a></li>
            <li><a href="{{ $app['url']->route('get-involved', ['name'=> 'offer-workshop']) }}">Offer Workshop</a></li>
            <li><a href="{{ $app['url']->route('get-involved', ['name'=> 'community']) }}">Community</a></li>
            <li><a href="{{ $app['url']->route('get-involved', ['name'=> 'partner']) }}">Partner</a></li>
          </ul>
        </li>
      </ul>
    </div>

  </div>
</nav>
