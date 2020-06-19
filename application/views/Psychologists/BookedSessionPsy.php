<div class="sess">
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