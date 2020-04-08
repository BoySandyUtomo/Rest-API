<!DOCTYPE html>
<html>
<head>
<style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table#t01 tr:nth-child(even) {
  background-color: #eee;
}
table#t01 tr:nth-child(odd) {
 background-color: #fff;
}
table#t01 th {
  background-color: black;
  color: white;
}
</style>
</head>
<body>

<center><h2>Resi Pengiriman</h2></center>


<table id="t01">
  <tr>
    <th>ID</th>
    <th>Nama</th> 
    <th>Penerima</th>
    <th>Email</th>
    <th>Tujuan</th>
    <th>No Hp</th>
    <th>Paket</th>
  </tr>
  <tr>
    <td><?= $data ['id'];?></td>
    <td><?= $data ['name'];?></td>
    <td><?= $data ['penerima'];?></td>
    <td><?= $data ['email'];?></td>
    <td><?= $data ['alamat'];?></td>
    <td><?= $data ['hp'];?></td>
    <td><?= $data ['paket'];?></td>
  </tr>
</table>
</body>
</html>

<script>
    window.print();
</script>