<nav role="navigation">
  <ul class="nav">
    <li>Home page</li>
    <li>
      About us
      <ul>
        <li><a href="{{ $app['url']->route('about', ['name'=> 'mission']) }}">Mission</a></li>
        <li><a href="{{ $app['url']->route('about', ['name'=> 'founder']) }}">Founder</a></li>
        <li><a href="{{ $app['url']->route('about', ['name'=> 'team']) }}">Team</a></li>
        <li><a href="{{ $app['url']->route('about', ['name'=> 'partners']) }}">Partners</a></li>
        <li><a href="{{ $app['url']->route('about', ['name'=> 'contact-us']) }}">Contact Us</a></li>
      </ul>
    </li>
    <li>
      Our Programmes
      <ul>
        <li><a href="{{ $app['url']->route('programmes', ['name'=> 'curriculum']) }}">Curriculum</a></li>
        <li><a href="{{ $app['url']->route('programmes', ['name'=> 'professional-development']) }}">Professional Development (Train the trainer)</a></li>
        <li><a href="{{ $app['url']->route('programmes', ['name'=> 'resources']) }}">Resources</a></li>
      </ul>
    </li>
    <li>
      Upcoming Events
      <ul>
        <li><a href="{{ $app['url']->route('programmes', ['name'=> 'past-events']) }}">Past Events</a></li>
        <li><a href="{{ $app['url']->route('programmes', ['name'=> 'hackathons']) }}">Hackathons</a></li>
      </ul>
    </li>
    <li>
      News
      <ul>
        <li><a href="{{ $app['url']->route('programmes', ['name'=> 'community']) }}">Community</a></li>
        <li><a href="{{ $app['url']->route('programmes', ['name'=> 'research']) }}">Research</a></li>
        <li><a href="{{ $app['url']->route('programmes', ['name'=> 'technology-in-schools']) }}">Technology in Schools</a></li>
        <li><a href="{{ $app['url']->route('programmes', ['name'=> 'podcasts']) }}">Podcasts</a></li>
        <li><a href="{{ $app['url']->route('programmes', ['name'=> 'press-kits']) }}">Press Kits</a></li>
      </ul>
    </li>
    <li>
      More
      <ul>
        <li><a href="{{ $app['url']->route('more', ['name'=> 'recognition']) }}">Recognition</a></li>
        <li><a href="{{ $app['url']->route('more', ['name'=> 'annual-report']) }}">Annual Report</a></li>
      </ul>
    </li>
    <li>
      Get Involved
      <ul>
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
</nav>
