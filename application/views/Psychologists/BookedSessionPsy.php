<div class="sess">
    <main role="main">
        <fieldset>
            <?php echo form_open(''); ?>
            <h2 class="text-bold text-capitalize text-dark text-center">My booked sessions</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Patient</th>
                        <th scope="col">Severity</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; foreach ($Sessions as $Session) : ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $Session['Name']; ?></td>
                            <td><?php echo $Session['Severity']; ?></td>
                            <td><?php echo $Session['Date']; ?></td>
                            <td><?php echo $Session['Time']; ?></td>
                        </tr>
                    <?php $i++; endforeach; ?>
                </tbody>
            </table>
    </main>
</div>
