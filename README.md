# oops

This project consists of Oops concepts and their examples in PHP.

INHERITANCE : 

Process of using all the methods of Master class in Child class is Inheritace. By using Inheritance we can avoid repeating methods again and again.

Example: Refer "inheritance.php"

POLYMORPHISM:

Before learning Polymorphism it is important to learn Interface.

INTERFACE:

Interface typically contains method name without any code in it. Its actually like defining properties of method. If you write three methods in Interface, you need to use all three methods in class that is extending that particular interface. Its like contract that cannot be broken no matter what.

Example: Refer "interface.php"

When we start to extend classes, and add functionality to method that is defined in Interface, and even override existing methods (functions), this is called "Polymorphism". In below example we used "Shape" interface and defined a method name "getarea", later on by extending interface we added two different functionality to single method i.e calculating area of circle and calculating area of square, this is known as polymorphism

Example: Refer "polymorphism.php"

METHOD OVERLOADING:

OverLoading in PHP differs from other languages. In other languages if we define two methods of same name with different number of parameters in a same class that is known as "Method overloading" whereas in PHP Overloading means dynamically creating properties and methods. These created properties and processed using magical methods, in below example we used magical method __CALL.

Example: Refer "methodOverLoading.php" 

METHOD OVERRIDING:

If we use the same method name in master class and child class, the funtionality of method wont be implemented insted method in child class will be implemented this is known as Method overriding.

Example: refer "methodOverRiding.php" 

