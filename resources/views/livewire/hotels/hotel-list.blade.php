<div>
    <main id="main" class="main">

        <div class="pagetitle">
          <h1>Hotels</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item">Pages</li>
              <li class="breadcrumb-item active">Blank</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
    
        <section class="section">
          <div class="row">
            <div class="col-lg-12">
    
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Check in Time</th>
                        <th scope="col">Check out Time</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($hotels as $hotel)
                      <tr>
                        <td>{{ $hotel->name }}</td>
                        <td>{{ $hotel->address }}</td>
                        <td>{{ $hotel->phone }}</td>
                        <td>{{ $hotel->email }}</td>
                        <td>{{ $hotel->check_in_time }}</td>
                        <td>{{ $hotel->check_out_time }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </h5>
                </div>
              </div>
    
            </div>

          </div>
        </section>
    
      </main>
</div>
