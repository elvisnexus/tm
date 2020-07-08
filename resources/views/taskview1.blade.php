@extends('layouts.app')


@section('title', 'TM :: Tasks')

@section('content')

    <!-- Navbar -->
              <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                  <div class="navbar-wrapper">
                    <a class="navbar-brand" href="javascript:;">Welcome Elvis</a>
                  </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="material-icons">notifications</i>
                          <span class="notification">3</span>
                          <p class="d-lg-none d-md-block">
                            Some Actions
                          </p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="#">David needs more time on his task</a>
                          <a class="dropdown-item" href="#">You have 5 new tasks</a>
                          <a class="dropdown-item" href="#">Ugo just completed his task</a>
                          <a class="dropdown-item" href="notifications.html" style="color: cornflowerblue" >View all</a>
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="material-icons">person</i>
                          <p class="d-lg-none d-md-block">
                            Account
                          </p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                          <a class="dropdown-item" href="#">Profile</a>
                          <a class="dropdown-item" href="#">Settings</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Log out</a>
                        </div>
                      </li>
                      <!-- your navbar here -->
                    </ul>
                  </div>
                </div>
              </nav>
            <!-- End Navbar -->



<div class="card card-nav-tabs col-md-6">
    <h4 class="card-header card-header-info">Task Details</h4>
    <div class="card-body">
      <h6 class="" style="display: inline; font-weight:bold; text-transform:none;">Title: </h6><span>Web Development</span><br>
      <h6 class="" style="display: inline; font-weight:bold; text-transform:none;">Description: </h6><span>Develop website for Standard Life SPAY.</span><br>
      <h6 class="" style="display: inline; font-weight:bold; text-transform:none;">Date Created: </h6><span>2020-06-04 14:36:51</span><br>
      <h6 class="" style="display: inline; font-weight:bold; text-transform:none;">Due Date: </h6><span>2020-06-04</span><br>
      <h6 class="" style="display: inline; font-weight:bold; text-transform:none;">Status: </h6><span>On-going</span><br>
      <form>
        {{-- <div class="form-group dropdown col-md-3"> --}}
            <label for="inputState" style="font-weight: bold; color:black;">Action</label>
            <select id="inputState" class="form-control" aria-placeholder="Select Action">
              {{-- <option selected>Choose...</option> --}}
              <option style="padding: 2px;">Mark Completed</option>
              <option style="padding: 2px;">Delete</option>
              <option style="padding: 2px;">Request </option>
            </select>
          {{-- </div> --}}

          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Select Action
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="javascript:;">Mark Completed</a>
              <a class="dropdown-item" href="javascript:;">Request Extension</a>
              <a class="dropdown-item" href="javascript:;">Delete</a>
            </div>
          </div>

          
          {{-- <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Action
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </div> --}}
      </form>
      {{-- <a href="#0" class="btn btn-success">Complete</a>
      <a href="#0" class="btn btn-danger">Delete</a> --}}
      <a href="#0" class="btn btn-info">Submit</a>
    </div>
  </div>
@endsection

