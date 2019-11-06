<?php
$user = array('Deni','Gilbert','Brandon','There','Jill'); // List of 5 user
$daily_limit_reward = 1000000; // Sample of Daily limit rewards parameter
$min_random_range_reward = 10000; // Min random range reward foreach user
$max_random_range_reward = 80000; // Max random range reward foreach user
?>
Daily limit rewards : Rp. <?php echo $daily_limit_reward; //PRINT value?>

<table border="">
	<thead>
		<tr>
			<th>Name</th>
			<th>Random Reward ( range ) </th>
			<th>Get Reward </th>
			<th>Balance / Daily limit rewards </th>
		</tr>
	</thead>
	<tbody>
<?php

$balance = $daily_limit_reward; //balance / daily limit reward 

foreach($user as $val){ // loop in all user for get reward
	$range_from = (rand($min_random_range_reward,$max_random_range_reward)); // random range start reward for each user from Min random variable to Max random variable
	$range_to = (rand($range_from,$max_random_range_reward)); // random range end reward for each user from range start to  Max random variable

	$get_reward = (rand($range_from,$range_to)); //random get reward of user from range start to range end
	$balancetemp = $balance - $get_reward; // variable temporary to get value balance
	if($balancetemp>0) // validation if balance greater than 0
	{
		$balance      = $balance - $get_reward;
		 //if yes, substract balance with get reward
?>
	<tr>
		<td><?php echo $val;?></td>
		<td>Rp. <?php echo $range_from;?> - Rp. <?php echo $range_to;?></td>
		<td><?php echo $get_reward;?></td>
		<td><?php echo $balancetemp;?></td>
	</tr>
<?php	
	}
	else
	{
	// IF no 
?>
	<tr>
		<td><?php echo $val;?></td>
		<td>Rp. <?php echo $range_from;?> - Rp. <?php echo $range_to;?></td>
		<td><?php echo $get_reward;?></td>
		<td><?php echo $balance; //use balance before?></td>
	</tr>
<?php
		break;
	}
}
?>
	</tbody>
</table>