<x-app-layout>
  
    <div>

        <h1>Admin Dashboard </h1>

    </div>

    <div>

        <form action="{{url('/addcreator')}}" method="POST">
            @csrf

            <div>
                <label>Full Name</label>
                <input type="text" name="name" required="">
            </div>

            <div>
                <label>Email</label>
                <input type="text" name="email" required="">
            </div>

            <div>
                <label>Password</label>
                <input type="password" name="password" required="">
            </div>

           <div>
                <label>Creator type</label>
                <input type="text" name="creator type" required="">
            </div>

            <div>
                <input type="submit">
            </div>

        </form>
    </div>

</x-app-layout>





