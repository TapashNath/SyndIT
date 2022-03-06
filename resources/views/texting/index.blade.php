@php
$siteName=" Customer Details";
$subName=" Customer Details";
@endphp
@extends('main.layout')

@section('container')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">@php
                    echo $subName;
                    @endphp</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{" /"}}" class="m-0">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{" /customer"}}" class="m-0">Customer</a>
                    </li>
                    <li class="breadcrumb-item active">@php
                        echo $subName;
                        @endphp</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="row flex-lg-nowrap">

        <table id="table" class="table">
            <thead>
                <tr>
                    <th data-type="number">No.</th>
                    <th>First name</th>
                    <th>Last name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Andrea</td>
                    <td>Ross</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Penelope</td>
                    <td>Mills</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Sarah</td>
                    <td>Grant</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Vanessa</td>
                    <td>Roberts</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Oliver</td>
                    <td>Alsop</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Jennifer</td>
                    <td>Forsyth</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Michelle</td>
                    <td>King</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Steven</td>
                    <td>Kelly</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Julian</td>
                    <td>Ferguson</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Chloe</td>
                    <td>Ince</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<!-- /.content -->
@endsection
