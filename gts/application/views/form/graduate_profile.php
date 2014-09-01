<?php
$form = array(
    'class'     => 'form-horizontal',
    'id'        => 'graduate-profile-form'
);
$label = array(
    'class'     => 'col-sm-3 my-label'
);
$lastname = array(
    'name'	=> 'LastName',
    'class'     => 'form-control',
    'id'	=> 'LastName',
    'maxlength'	=> 50,
);
$firstname = array(
    'name'	=> 'FirstName',
    'class'     => 'form-control',
    'id'	=> 'FirstName',
    'maxlength'	=> 50,
);
$middlename = array(
    'name'	=> 'MiddleName',
    'class'     => 'form-control',
    'id'	=> 'MiddleName',
    'maxlength'	=> 50,
);
$lastname01 = array(
    'name'	=> 'LastName01',
    'class'     => 'form-control',
    'id'	=> 'LastName01',
    'maxlength'	=> 50,
);
$extension = array(
    'name'	=> 'ExtensionName',
    'class'     => 'form-control',
    'id'	=> 'ExtensionName',
    'maxlength'	=> 3,
);
$address = array(
    'name'	=> 'Address',
    'class'     => 'form-control',
    'id'	=> 'Address',
    'maxlength'	=> 200,
    'row'       => 3,
);
$civil_status = array(
    'name'	=> 'CivilStatus',
    'class'     => 'form-control',
    'id'	=> 'CivilStatus',
);
$civil_status_attr = 'class="form-control" id="CivilStatus"';
$civil_status_opt = array(
    'Single'                => 'Single',
    'Married'               => 'Married',
    'Separated/Divorced'    => 'Separated/Divorced',
    'Single Parent'         => 'Single Parent',
    'Widow or Widower'      => 'Widow or Widower',
);
$sex = array(
    'name'	=> 'Sex',
    'class'     => 'form-control',
    'id'	=> 'Sex',
);
$sex_attr = 'class="form-control" id="Sex"';
$sex_opt = array(
    1   => 'Male',
    0   => 'Female',
);
$birthdate = array(
    'name'              => 'BirthDate',
    'class'             => 'form-control datepicker',
    'id'                => 'BirthDate',
    'data-date-format'  => 'yyyy/mm/dd',
);
$region = array(
    'name'	=> 'RegionOfOrigin',
    'class'     => 'form-control',
    'id'	=> 'RegionOfOrigin',
);
$region_attr = 'class="form-control" id="RegionOfOrigin"';
$region_opt = array(
    'Region 1' => 'Region 1',
    'Region 2' => 'Region 2',
    'Region 3' => 'Region 3',
    'Region 4' => 'Region 4',
    'Region 5' => 'Region 5',
    'Region 6' => 'Region 6',
    'Region 7' => 'Region 7',
    'Region 8' => 'Region 8',
    'Region 9' => 'Region 9',
    'Region 10' => 'Region 10',
    'Region 11' => 'Region 11',
    'Region 12' => 'Region 12',
    'NCR' => 'National Capital Region',
    'CAR' => 'Cordillera Administrative Region',
    'ARMM' => 'Autonomous Region of Muslim Mindanao',
    'CARAGA' => 'CARAGA',
);
$province = array(
    'name'	=> 'Province',
    'class'     => 'form-control',
    'id'	=> 'Province',
    'maxlength'	=> 100,
);
$location = array(
    'name' => 'LocationOfResidence',
    'class' => 'form-control',
    'id' => 'LocationOfResidence',
);
$location_attr = 'class="form-control" id="LocationOfResidence"';
$location_opt = array(
    1 => 'City',
    0 => 'Municipality'
);
$telephone = array(
    'name'	=> 'TelephoneNo',
    'class'     => 'form-control',
    'id'	=> 'TelephoneNo',
    'maxlength'	=> 30,
);
$cellphone = array(
    'name'	=> 'CellphoneNo',
    'class'     => 'form-control',
    'id'	=> 'CellphoneNo',
    'maxlength'	=> 30,
);
$submit = array(
    'name'	=> 'save_profile',
    'class'     => 'btn btn-primary',
    'id'	=> 'save_profile',
    'value'	=> 'Save Profile',
);
?>
<div class="content">
<?php echo form_open($this->uri->uri_string(), $form); ?>
<div class="row group-header">General Information</div>
<div class="form-group">
    <?php echo form_label('Lastname', $lastname['id'], $label); ?>
    <div class="col-sm-9"><?php echo form_input($lastname); ?></div>
    <div class="col-sm-12"><?php echo form_error($lastname['name']); ?></div>
</div>
<div class="form-group">
    <?php echo form_label('Firstname', $firstname['id'], $label); ?>
    <div class="col-sm-9"><?php echo form_input($firstname); ?></div>
    <div class="col-sm-12"><?php echo form_error($firstname['name']); ?></div>
</div>
<div class="form-group">
    <?php echo form_label('Middlename', $middlename['id'], $label); ?>
    <div class="col-sm-9"><?php echo form_input($middlename); ?></div>
    <div class="col-sm-12"><?php echo form_error($middlename['name']); ?></div>
</div>
<div class="form-group">
    <?php echo form_label('Maiden Lastname', $lastname01['id'], $label); ?>
    <div class="col-sm-9"><?php echo form_input($lastname01); ?></div>
    <div class="col-sm-12"><?php echo form_error($lastname01['name']); ?></div>
</div>
<div class="form-group">
    <?php echo form_label('Name Suffix', $extension['id'], $label); ?>
    <div class="col-sm-9"><?php echo form_input($extension); ?></div>
    <div class="col-sm-12"><?php echo form_error($extension['name']); ?></div>
</div>
<div class="form-group">
    <?php echo form_label('Address', $address['id'], $label); ?>
    <div class="col-sm-9"><?php echo form_textarea($address); ?></div>
    <div class="col-sm-12"><?php echo form_error($address['name']); ?></div>
</div>
<div class="form-group">
    <?php echo form_label('Civil Status', $civil_status['id'], $label); ?>
    <div class="col-sm-9"><?php echo form_dropdown($civil_status['name'],$civil_status_opt,'Single',$civil_status_attr); ?></div>
    <div class="col-sm-12"><?php echo form_error($civil_status['name']); ?></div>
</div>
<div class="form-group">
    <?php echo form_label('Sex', $sex['id'], $label); ?>
    <div class="col-sm-9"><?php echo form_dropdown($sex['name'],$sex_opt,'Male',$sex_attr); ?></div>
    <div class="col-sm-12"><?php echo form_error($sex['name']); ?></div>
</div>
<div class="form-group">
    <?php echo form_label('Birthdate', $birthdate['id'], $label); ?>
    <div class="col-sm-9"><?php echo form_input($birthdate); ?></div>
    <div class="col-sm-12"><?php echo form_error($birthdate['name']); ?></div>
</div>
<div class="form-group">
    <?php echo form_label('Region', $region['id'], $label); ?>
    <div class="col-sm-9"><?php echo form_dropdown($region['name'],$region_opt,'Region 12',$region_attr); ?></div>
    <div class="col-sm-12"><?php echo form_error($region['name']); ?></div>
</div>
<div class="form-group">
    <?php echo form_label('Province', $province['id'], $label); ?>
    <div class="col-sm-9"><?php echo form_input($province); ?></div>
    <div class="col-sm-12"><?php echo form_error($province['name']); ?></div>
</div>
<div class="form-group">
    <?php echo form_label('Location of Residence', $location['id'], $label); ?>
    <div class="col-sm-9"><?php echo form_dropdown($location['name'],$location_opt,'Municipality',$location_attr); ?></div>
    <div class="col-sm-12"><?php echo form_error($location['name']); ?></div>
</div>
<div class="form-group">
    <?php echo form_label('Telephone Number', $telephone['id'], $label); ?>
    <div class="col-sm-9"><?php echo form_input($telephone); ?></div>
    <div class="col-sm-12"><?php echo form_error($telephone['name']); ?></div>
</div>
<div class="form-group">
    <?php echo form_label('Cellphone Number', $cellphone['id'], $label); ?>
    <div class="col-sm-9"><?php echo form_input($cellphone); ?></div>
    <div class="col-sm-12"><?php echo form_error($cellphone['name']); ?></div>
</div>
<div class="form-group">
    <div class="col-sm-12 text-center"><?php echo form_submit($submit); ?></div>
</div>
<?php echo form_close(); ?>
</div>