<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $mang = array(
        array(
            'name' => 'Nguyen Manh Trung',
            'Lop' => '2010A03',
            'Gioi tinh'=>' Nam'
        ),
         array(
            'name' => 'Lai Quang Thang',
            'Lop' => '2010A03',
            'Hoc luc' => 'Gioi'
         ),





         array(
            'name' => 'Nguyen Viet Hoang',
            'Lop' => '2010A03',
            'CN' => 'CNPM'
         )
         );
    
     $new_mang = array(
        'name' => 'Pham Minh Quan',
        'Lop' => '2010A02',
        'CN' => 'Kinhte',
     );
        $mang[]= $new_mang;
        unset($mang[2]);
        foreach($mang as $key => $mang)
        {
           echo '<br>';
           var_dump($mang);
          echo '<br/>'; 
   
        }
    ?>

</body>
</html>