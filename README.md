# Facial-recognition platform 

It is an absence manager based on facial recognition in python.
To visualize student absences and manage their consequences, we have developed 1 web application in Java JEE, and 1 other in PHP (for visitors who will therefore have a different control procedure to that of people registered in the establishment) and MySQL. 
**The code is in French since it is a project carried out within the framework of our school**.

To open/close the door lock, we used an arduino board with the pyfirmata library for python on ubuntu. For the door, we made a mechanical design with CATIA software, then printed it in 3D.

# Tasks of group members
## Adrien
> Mechanical design of the door + 3D printing.

## Chahed
> Development of the Java JEE + MySQL web application.

## Marouane
> Development of the application in PHP to manage visitors + MySQL.

## Slim 
> Facial recognition with the face recognition API (based on the SVM classifier) of python + MySQL (for the storage of presences in case of detection).

## Talha
> MySQL database design + front end support.
  
## Wassim
> Setting up the automatic lock with arduino + pyfirmata + wiring.

# File location
## "reconnaitre python" folder
> Here we find the python code for face recognition using the face recognition API with the part to open the lock (pyfirmata).

## "projet_web_jee" folder
> Here we find the JEE application to display the absscenes of the students stored in the database.

## "gestion-visiteur" folder
> Here we find the PHP application to manage visitors who are not recognized by our AI.

## "reconnaitre sql" folder 
> Here we find the SQL queries for our database following facial recognition.
 
## "les_rendus" folder 
> Each of us has described his task on this project in this folder.
