<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function App\Helpers\myadd;

class TestController extends Controller
{
    public function testthreeparam($var1, $var2, $var3){

        dd($var1, $var2, $var3);
        
    }
    public function testparam(){
        return view("welcome2");
    }
    public function helpertest(){
        echo myadd(2, 3);
    }

    public function dbone(){

        $usres = DB::table('users')->get();
        dd($usres);
    }

    public function collection(){
    //    dd([1,2,3,4,5,6,7,8,9,10]);
    //    $n = collect([1,2,3,4,5,6,7,8,9,10]);
       $n = collect(range(0,100,2));
       $n[3] = range("A","G");
       /* $odds = $n->reject(function ($item) {
        return $item % 2 === 0;
       });
       //dd($odds);
       $multiplied = $n->map(function ($item) {
        return $item * 10;
       }); */
    //    dd($multiplied->min());
    //    dd($n->toArray());
    //    echo $n->toJson();
    //    dd($n->flatten());
    $admins = User::with('profile')->where('roles', 'user')->take(5)->get();
    dd($admins->toArray());
       
    }

    public function testsegment(Request $request){
        //http://localhost/ROUND57/Laravel/todo/public/testsegment/4/7
        // dd($request->segments());//plural for all segments
        dd($this->arguments());
        dd($request->segment(1), $request->segment(2), $request->segment(3)); //singular for single segment
    }
    public function userinfo($userid){
        dd(User::find($userid));
    }
}
/*
In both JavaScript and PHP, arrays are a fundamental data structure that provides a way to store and manipulate collections of data. Each language offers a variety of built-in array methods that allow you to perform common operations on arrays. Here are some of the most popular array methods in JavaScript and PHP:

**JavaScript Array Methods:**

1. `forEach()`: Executes a provided function once for each array element.
2. `map()`: Creates a new array with the results of calling a provided function on every element in the calling array.
3. `filter()`: Creates a new array with all elements that pass the test implemented by the provided function.
4. `reduce()`: Applies a function against an accumulator and each element in the array to reduce it to a single value.
5. `find()`: Returns the value of the first element in the array that satisfies the provided testing function.
6. `includes()`: Determines whether an array includes a certain value among its entries.
7. `push()`: Adds one or more elements to the end of an array.
8. `pop()`: Removes the last element from an array and returns it.
9. `shift()`: Removes the first element from an array and returns it.
10. `unshift()`: Adds one or more elements to the beginning of an array.
11. `concat()`: Merges two or more arrays and returns a new array.
12. `slice()`: Returns a shallow copy of a portion of an array into a new array object.
13. `splice()`: Changes the contents of an array by removing or replacing existing elements and/or adding new elements in place.
14. `indexOf()`: Returns the first index at which a given element can be found in the array, or -1 if it is not present.
15. `sort()`: Sorts the elements of an array in place and returns the array.

**PHP Array Methods:**

1. `array_map()`: Applies a callback function to each element of an array and returns a new array with the results.
2. `array_filter()`: Filters the elements of an array using a callback function, returning a new array with the elements that passed the test.
3. `array_reduce()`: Applies a callback function to reduce the array to a single value.
4. `array_push()`: Pushes one or more elements onto the end of the array.
5. `array_pop()`: Pops and returns the last value from the array.
6. `array_shift()`: Shifts and returns the first value from the array.
7. `array_unshift()`: Prepends one or more elements to the beginning of the array.
8. `array_merge()`: Merges one or more arrays into a new array.
9. `array_slice()`: Returns a slice of the array.
10. `array_splice()`: Removes a portion of the array and replaces it with something else.
11. `array_search()`: Searches for a given value in an array and returns the first corresponding key if successful.
12. `in_array()`: Checks if a value exists in an array.
13. `array_unique()`: Removes duplicate values from an array.
14. `array_reverse()`: Returns an array with elements in reverse order.
15. `sort()`: Sorts an array in ascending order.

These are just a few examples of the many array methods available in JavaScript and PHP. Both languages provide powerful tools for working with arrays, allowing you to perform a wide range of operations and manipulations on array data.

In Laravel, the `Collection` class provides a set of powerful methods for working with arrays and objects. Here are some of the most popular and commonly used Collection methods in Laravel:

1. **`all()`**: Returns all items in the collection.
2. **`map()`**: Iterates over the collection and passes each value to the given callback. The callback's return value is added to a new collection.
3. **`filter()`**: Creates a new collection containing all items from the original collection that pass the given truth test.
4. **`pluck()`**: Retrieves all values for a given key from an array or collection of arrays.
5. **`where()`**: Filters the collection by a given key/value pair.
6. **`each()`**: Iterates over the collection, passing each value to the given callback.
7. **`contains()`**: Determines if the collection contains a given item.
8. **`sum()`**: Returns the sum of all items in the collection.
9. **`avg()`**: Returns the average value of all items in the collection.
10. **`min()`**: Returns the minimum value of all items in the collection.
11. **`max()`**: Returns the maximum value of all items in the collection.
12. **`sortBy()`**: Sorts the collection by the given key. This returns a fresh collection instance.
13. **`groupBy()`**: Groups the collection by the given key.
14. **`unique()`**: Returns all unique items from the collection.
15. **`merge()`**: Merges the given array or collection with the original collection.
16. **`concat()`**: Appends the given array or collection values onto the end of the collection.
17. **`flatten()`**: Flattens a multi-dimensional collection into a single dimension.
18. **`implode()`**: Joins the items in a collection using a string delimiter.
19. **`transform()`**: Iterates over the collection and calls the given callback with each item in the collection, allowing you to mutate the items.
20. **`whereIn()`**: Filters the collection by a given key/value contained within the given array or collection.

These methods provide a powerful and expressive way to manipulate data in Laravel applications. They can be chained together to perform complex operations on collections, making it easier to work with arrays and objects in a more concise and readable manner.

It's worth noting that Laravel collections are inspired by the popular PHP library `Tightenco/Collect`, which provides a similar set of methods for working with arrays and objects in PHP.
*/
