<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sn sm:rounded-lg">
                <div class="p-6 text-gray-900">

                <p><a href="{{ route('admin/products') }}" class="btn btn-primary">Go Back</a></p>

                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf 
                    <div class="row mb-3"> 
                        <div> class="col">
                            <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="category" class="form-control" placeholder="Catengory">
                                </div>
                             </div>
                             <div class="row mb-3">
                                <div class="col">
                                    <input type="text" name="price" class="form-control" placeholder="price">
                                </div>
                                </div>

                                <div class="row">
                                 <div class=""d=grid>
                                    <button class="btn btn-primary">Submit</button>
                                 </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>