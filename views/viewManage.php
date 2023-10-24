<table class="table table-responsive col-sm-9 table table-striped text-center mt-5" >
	<thead class="thead-light bg-black text-white">
		<tr>
			<th scope="col">first Name</th>
			<th scope="col">last Name</th>
			<th scope="col">User Name</th>
			<th scope="col">Email</th>
			<th scope="col">Password</th>
			<th scope="col">Image</th>
			<th scope="col">Actions</th>
		</tr>
	</thead>
    <tbody class="text-center" id="tbody">
    <?php foreach($admins as $admin): ?>
            <tr class="table-success">
                <td><?= $admin->getFirstName() ?></td>
                <td><?= $admin->getLastName() ?></td>
                <td><?= $admin->getUserName() ?></td>
                <td><?= $admin->getEmail() ?></td>
                <td><?= $admin->getPwd() ?></td>
                <td><img class='rounded' style='width : 70px ; height : 70px' src="images/<?= $admin->getImg() ?>" alt='img' /></td>
                <td><button class="btn btn-outline-success" onclick="upgrateAuthor(<?= $admin->getCode() ?>)" >Articles</button></td>
                <td><button class="btn btn-outline-danger" onclick="deleteAuthor(<?= $admin->getCode() ?>)" >Followers</button></td>
            </tr>
        <?php endforeach ?>
        <?php foreach($authors as $author): ?>
            <tr>
                <td><?= $author->getFirstName() ?></td>
                <td><?= $author->getLastName() ?></td>
                <td><?= $author->getUserName() ?></td>
                <td><?= $author->getEmail() ?></td>
                <td><?= $author->getPwd() ?></td>
                <td><img class='rounded' style='width : 70px ; height : 70px' src="images/<?= $author->getImg() ?>" alt='img' /></td>
                <td><button class="btn btn-outline-success" onclick="acceptDemand(<?= $author->getCode() ?>)" >upgrade</button></td>
                <td><button class="btn btn-outline-danger" onclick="deleteAuthor(<?= $author->getCode() ?>)" >Delete</button></td>
            </tr>
        <?php endforeach ?>    
        <?php foreach($demands as $demand): ?>
            <tr class="table-danger">
                <td><?= $demand->getFirstName() ?></td>
                <td><?= $demand->getLastName() ?></td>
                <td><?= $demand->getUserName() ?></td>
                <td><?= $demand->getEmail() ?></td>
                <td><?= $demand->getPwd() ?></td>
                <td><img class='rounded' style='width : 70px ; height : 70px' src="images/<?= $demand->getImg() ?>" alt='img' /></td>
                <td><button class="btn btn-outline-success" onclick="acceptDemand(<?= $demand->getCode() ?>)" >Accept</button></td>
                <td><button class="btn btn-outline-danger" onclick="ignoreDemand(<?= $demand->getCode() ?>)" >Ignore</button></td>
            </tr>
        <?php endforeach ?>    
    </tbody>
</table>