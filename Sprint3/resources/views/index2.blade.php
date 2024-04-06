<style>
    .d-flex {
        display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
    
    </style>

<div class="container text-center d-flex">
    <h1 style="color: #007bff;">Employee Schedules</h1>
    <a href="{{ route('employee-schedules.create') }}" class="btn btn-primary mb-3">Add Schedule</a>

    <div class=" justify-content-center">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" style="background-color: #f8f9fa;">
                <thead style="background-color: #007bff; color: white;">
                    <tr>
                        <th>Employee</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <!-- Add other necessary columns -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($em as $schedule)
                        <tr>
                            <td>{{ $schedule->employee_id }}</td>
                            <td>{{ $schedule->start_time }}</td>
                            <td>{{ $schedule->end_time }}</td>
                            <!-- Display other schedule details -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>