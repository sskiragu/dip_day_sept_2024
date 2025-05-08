<?php

//Data Types in PHP with examples and descriptions
// 1. String
// A string is a sequence of characters enclosed in single or double quotes.
// Strings can contain letters, numbers, and special characters.
$greeting = "Hello, World!";
// Strings can be concatenated using the dot (.) operator.
$fullGreeting = $greeting . " How are you?";
echo $fullGreeting; // Output: Hello, World! How are you?
// 2. Integer
// An integer is a whole number without a decimal point.
$age = 25;
// Integers can be positive or negative.
$negativeNumber = -10;
// 3. Float
// A float (or double) is a number with a decimal point.
$price = 19.99;
// Floats can also be represented in scientific notation.
$scientificNotation = 1.5e3; // 1500
// 4. Boolean
// A boolean is a data type that can have two possible values: true or false.
$isActive = true;
$isLoggedIn = false;
// 5. Array
// An array is a collection of values stored in a single variable.
$fruits = array("apple", "banana", "cherry");
// Arrays can be indexed (numerical) or associative (key-value pairs).
$associativeArray = array("name" => "John", "age" => 30, "city" => "New York");
// 6. Object
// An object is an instance of a class. It can contain properties and methods.
class Car {
    public $make;
    public $model;

    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }
}
$myCar = new Car("Toyota", "Camry");
// 7. NULL
// NULL is a special data type that represents a variable with no value.
$emptyValue = null;
// NULL can be assigned to a variable to indicate that it has no value.
$unsetVariable = null;
// 8. Resource
// A resource is a special variable that holds a reference to an external resource, such as a database connection or file handle.
// Resources are created and managed by PHP and are not directly manipulated.
// Example: Creating a file resource
$fileHandle = fopen("example.txt", "w");
// fwrite($fileHandle, "Hello, World!");
// fclose($fileHandle); // Close the file resource 