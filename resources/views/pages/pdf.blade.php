<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cetak PDF</title>
    <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    text-transform: capitalize;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
h1{
  text-align: center;
}
h4{
  text-transform: uppercase;
}
#email{
  text-transform: none;
}
#intv{
  background-color: yellow;
}
</style>
  </head>

  <body>
    <h1>United Kingdom Electronic Visa Application</h1>
    <hr>

    <div class="container">
        <h4>applicant biographic details and travel date </h4>
        <table>
          <tbody>
            <tr>
              <td>Reference Number :</td>
              <td>
                {{$barcode = Auth::user()->application->no_referensi}} <br>
                <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($barcode, 'C39')}}" alt="barcode" /> <br>

              </td>
            </tr>
            <tr>
              <td>Given Name</td>
              <td> {{Auth::user()->passport->given_name}} </td>
            </tr>
            <tr>
              <td>Last Name</td>
              <td>{{Auth::user()->passport->last_name}}</td>
            </tr>
            <tr>
              <td>Date Of Birth</td>
              <td> {{Auth::user()->passport->date_of_birth}}</td>
            </tr>
            <tr>
              <td>Address</td>
              <td>{{Auth::user()->passport->address}}</td>
            </tr>
            <tr>
              <td>Place Of Birth</td>
              <td> {{Auth::user()->passport->place_of_birth}}</td>
            </tr>
            <tr>
              <td>Passport Number</td>
              <td>{{Auth::user()->passport->no_passport}}</td>
            </tr>
            <tr>
              <td>Date Issue </td>
              <td>{{Auth::user()->passport->date_issue}}</td>
            </tr>
            <tr>
              <td>Expiry Date</td>
              <td>{{Auth::user()->passport->expiry_date}}</td>
            </tr>
            <tr id="intv">
              <td >Interview Date</td>
              <td> {{Auth::user()->application->interview_date}}</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="container">
          <h4>visa applicant contact detail </h4>
          <table>
            <tbody>
              <tr>
                <td>Email address</td>
                <td id="email"> {{Auth::user()->email}} </td>
              </tr>
              <tr>
                <td>Contact Number</td>
                <td>{{Auth::user()->contact_number}}</td>
              </tr>
            </tbody>
          </table>
        </div>
  </body>
</html>
