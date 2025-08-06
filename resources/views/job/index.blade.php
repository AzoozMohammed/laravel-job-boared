<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->

    <h1>Job Boared</h1>

    <h3>{{ 'the name is : ' . $name }}</h3>

    @foreach ($job as $job)
        <p>{{ 'the job title is : ' . $job['title'] . ' || company : ' . $job['company'] . ' || location: ' . $job['location'] . ' || salary: ' . $job['salary']}}</p>
    @endforeach
</div>
