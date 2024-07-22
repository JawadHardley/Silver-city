<h2>{{ $job->title }}</h2>

<p>A new job has arrived in the site of watasha</p>
<a href="{{ url('/jobs/' . $job->id) }}">Open and Apply</a>
<p>Thanks</p>
