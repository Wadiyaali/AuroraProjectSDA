<div class="sess">
<<<<<<< HEAD
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
=======
<main role="main">
			<fieldset>			
		<h2 class="text-bold text-capitalize text-dark text-center">Booked session</h2>
            <div class="col-md-6 form-element">
                <?php if (!empty($Session)) : $count = 1; ?>
                    <div class=" table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                                <td>Session ID</td>
                                <td>Patient ID</td>
                                <td>Date</td>
                                <td>
                                   Time
                                </td>
                               
                            </thead>
                            <tbody>
                                <?php foreach ($Session as $sess) : ?>
                                    <tr>
                                        <td><?php echo $count ?></td>
                                        <td><?php echo $sess['SID'] ?></td>
                                        <td><?php echo $sess['PID'] 
?></td>
                                        <td>
                                            <?php echo $sess['Date'] ?>
                                        </td>
                                        <td>
                                            <?php echo $sess['Time'] ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo site_url('Medicine/EditItem/' . $Med['MedID']) ?>" class="btn btn-sm btn-primary"> Update</a>
                                            <a href="javascript:;" class="btn btn-sm btn-delete btn-danger" data-id="<?php echo $Med['MedID'] ?>"> Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $count++?>
                            </tbody>
                        </table>   
      </div>   <?php else : ?>
                <?php endif;
                ?></div>      </fieldset>
	
</main>
  </div>
>>>>>>> bb4dae05fc99bf32988c35fe2c7b1a9a6c886b97
