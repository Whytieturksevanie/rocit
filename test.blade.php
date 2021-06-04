 <form action="{{route('cars.destroy', $car->id)}}" method="post">
            @method('delete')
            @csrf
            <input type="submit" value="Delete appointment" class="deletecarbutton ml-4">
        </form>