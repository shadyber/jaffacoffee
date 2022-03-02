@extends('layouts.admin')
@section('title','Update Static Pages')
@section('content')

    <div class="tabs-container">
        <ul class="nav nav-tabs" role="tablist">
            <li><a class="nav-link active" data-toggle="tab" href="#tab-1">Terms and Conditions</a></li>
            <li><a class="nav-link" data-toggle="tab" href="#tab-2">Privacy Policy</a></li>
            <li><a class="nav-link" data-toggle="tab" href="#tab-3">Refund Policy</a></li>
            <li><a class="nav-link" data-toggle="tab" href="#tab-4">Shipping and Orders Policy</a></li>
        </ul>

        <div class="tab-content">

            <!-- Tab 1 Content -->
            <div role="tabpanel" id="tab-1" class="tab-pane active">
                <h1>Update Terms and Condition</h1>
                <form action="/static" method="post">
                    @csrf
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea name="terms_and_conditoion" id="terms_and_conditoion" cols="30" rows="10" class="form-control detail">
{{\App\Models\StaticPages::TermsAndConditions()}}
                                </textarea>
                            </div>
                        </div>
<div class="form-group">
    <input type="submit" value="Update" class="btn btn-primary">
</div>
                </form>
            </div>
            <!-- End of Tab 1 Content -->

            <!-- Tab 2 Content -->
            <div role="tabpanel" id="tab-2" class="tab-pane ">
                <form action="/static" method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-12">
                                <textarea name="privacy_policy" id="privacy_policy" cols="30" rows="10" class="form-control detail">
{{\App\Models\StaticPages::PrivacyPolicy()}}
                                </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Update" class="btn btn-primary">
                    </div>
                </form>
            </div>
            <!-- End of Tab3 Content -->

            <div role="tabpanel" id="tab-3" class="tab-pane">
                <form action="/static" method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-12">
                                <textarea name="refund_policy" id="refund_policy" cols="30" rows="10" class="form-control detail">
{{\App\Models\StaticPages::RefundPolicy()}}
                                </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Update" class="btn btn-primary">
                    </div>
                </form>
            </div>
            <!-- End of Tab 1 Content -->
            <div role="tabpanel" id="tab-4" class="tab-pane ">
                <form action="/static" method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-12">
                                <textarea name="shipping_and_order" id="shipping_and_order" cols="30" rows="10" class="form-control detail">
{{\App\Models\StaticPages::ShippingAndOrder()}}
                                </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Update" class="btn btn-primary">
                    </div>
                </form>
            </div>
            <!-- End of Tab 1 Content -->


        </div>
    </div>
    <!-- End of Tab 2 Content Tables -->


@endsection

@section('js')
    <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('terms_and_conditoion');
        CKEDITOR.replace('privacy_policy');
        CKEDITOR.replace('refund_policy');
        CKEDITOR.replace('shipping_and_order');
    </script>
@endsection
