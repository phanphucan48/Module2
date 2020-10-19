<?php

namespace Staff;

class Staff
{
    public $firstname;
    public $lastname;
    public $birthday;
    public $address;
    public $location;

    public function __construct($firtname, $lastname, $birthday, $address, $location)
    {
        $this->firstname = $firtname;
        $this->lastname = $lastname;
        $this->birthday = $birthday;
        $this->address = $address;
        $this->location = $location;
    }
}

class StaffManager
{
    public $staffs;
    public function addStaff($staff)
    {
        $this->staffs[] = $staff;
    }
    public function delete($index)
    {
        array_splice($this->staffs, $index, 1);
    }
}

$staff1 = new Staff("Nam", "Nguyễn", "10/10", "Huế", "IT");
$staff2 = new Staff("Trường", "Nguyễn", "20/10", "Hà Nội", "Doctor");
$starffManager = new StaffManager();
$starffManager->addStaff($staff1);
$starffManager->addStaff($staff2);

$arrayStarff = [$staff1, $staff2];




echo "<pre>";
print_r($arrayStarff);
// $listStaff = [
//     new Staff("Nguyen", "Truong", "10/20", "Huế", "IT"),
//     new Staff("Hoang", "Tung", "12/2", "Huế", "enginear"),
//     new Staff("Phuong", "Nam", "10/10", "Huế", "doctor"),
// ]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



</body>

</html>