<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Germany Visa Processing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f2f2f2;
        }
        .visa-card {
            transition: transform 0.3s;
        }
        .visa-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>

<div class="container py-5">
    <h1 class="text-center mb-4">Germany Visa Processing Systems</h1>
    
    <div class="row row-cols-1 row-cols-md-3 g-4">

        {{-- Card 1 --}}
        <div class="col">
            <div class="card visa-card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">Student Visa</h5>
                    <p class="card-text">Apply to German universities and get a long-term student visa for higher education.</p>
                </div>
            </div>
        </div>

        {{-- Card 2 --}}
        <div class="col">
            <div class="card visa-card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">Job Seeker Visa</h5>
                    <p class="card-text">Allows you to stay in Germany for up to 6 months to find a job.</p>
                </div>
            </div>
        </div>

        {{-- Card 3 --}}
        <div class="col">
            <div class="card visa-card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">Employment Visa</h5>
                    <p class="card-text">For skilled workers with a job offer from a German employer.</p>
                </div>
            </div>
        </div>

        {{-- Card 4 --}}
        <div class="col">
            <div class="card visa-card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">Freelancer Visa</h5>
                    <p class="card-text">For self-employed professionals or freelancers working with German clients.</p>
                </div>
            </div>
        </div>

        {{-- Card 5 --}}
        <div class="col">
            <div class="card visa-card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">Family Reunion Visa</h5>
                    <p class="card-text">If you have close family living legally in Germany, you can join them.</p>
                </div>
            </div>
        </div>

        {{-- Card 6 --}}
        <div class="col">
            <div class="card visa-card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">Language Course Visa</h5>
                    <p class="card-text">For people attending intensive German language courses (more than 18 hours/week).</p>
                </div>
            </div>
        </div>

    </div>
</div>

@include('layouts.footer')


</body>
</html>
