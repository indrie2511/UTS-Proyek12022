<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memasukan Data Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>
<body>

<h3>Memasukan Data Pasien</h3>
<hr>
<br>
<br>

<form method="POST" action="Tugas_Proyek1">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
          </div>
        </div> 
        <input id="text" name="nama" placeholder="Nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
          </div>
        </div> 
        <input id="text1" name="kode" placeholder="kode" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-8">Gender</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="radio_0" type="radio" class="custom-control-input" value="P"> 
        <label for="radio_0" class="custom-control-label">P</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="radio_1" type="radio" class="custom-control-input" value="L"> 
        <label for="radio_1" class="custom-control-label">L</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-8 col-form-label">Tanggal Pemeriksaan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
          </div>
        </div> 
        <input id="text2" name="tanggal_pemeriksaan" placeholder="tahun-bulan-hari" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-8 col-form-label">Berat</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
          </div>
        </div> 
        <input id="text3" name="berat" placeholder="berat" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-8 col-form-label">Tinggi</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
          </div>
        </div> 
        <input id="text4" name="tinggi" placeholder="tinggi" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-4">
      <button name="submit" type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>
</body>
</html>