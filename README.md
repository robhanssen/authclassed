#<$Id: README,v 1.5 2002/11/25 13:17:29 robhanssen Exp $>

AuthClassed is a class, written in PHP, to implement a simple authentification scheme for 
database-oriented webpages. Using AuthClassed is as simple as putting a single code line 
at the top of the webpage you would like to protect.


TABLE OF CONTENTS

1. GETTING THE FILES
2. INSTALLATION
3. USE OF THE CLASS
4. COPYRIGHT NOTICE


1. GETTING THE FILES

The latest stable version can be found on the website of AuthClassed
(http://authclassed.sourceforge.net) or the project site of AuthClassed on
Sourceforge (http://sourceforge.net/projects/authclassed). If you want more than that, it is
always possible to get the latest (unstable) version from cvs.

To get the latest version via cvs, you will need a ssh client and a cvs
client. This project's SourceForge.net CVS repository can be checked out
through anonymous (pserver) CVS with the following instruction set. The
module you wish to check out must be specified as the modulename. When
prompted for a password for anonymous, simply press the Enter key. 

cvs -d:pserver:anonymous@cvs.authclassed.sourceforge.net:/cvsroot/authclassed login 
 
cvs -z3 -d:pserver:anonymous@cvs.authclassed.sourceforge.net:/cvsroot/authclassed co authclassed


2. INSTALLATION

First the database must be created. In order to do this, you must ask you
database administrator to process the file 'authclassed.sql' for you. If you
are the database adminstrator, run the command

mysql -u root -p < authclassed.sql.

If you want to rename the database or table, change the names in
'authclassed.sql' and change the database and table name in the class files.

3. USE OF THE CLASS

AuthClassed was designed to be as simple as possible. The only thing you
have to do is include the class file in your script and invoke a new object,
indicating a security level. Examples can be found in the examples
directory.

Exported functions:

constructor AuthClassed(int $pagelevel)

    The constructor function sets up the authentification mechanism. The
    required parameter $pagelevel is an integer indicating the permission needed
    to view this page. Please pay attention that a lower $pagelevel means a 
    higher permission

string getUserid()

    the function getUserid() returns the userid.

string getUsername()

    the function getUsername() returns the username.

int getUserPerm()

    the function getUserPerm() returns the user's permission level.

bool getUserPass()

    The function getUserPass() returns TRUE if the password has been set,
    otherwise FALSE. 

bool isPermitted(int $pagelevel [,EXACT])

    The function isPermitted(int $actionlevel) returns true is the user
    is authorized to do the action with $actionlevel (i.e. the user's
    authorization level is lower than $actionlevel. If the second parameter
    EXACT is specified, the function will return TRUE only is the user's
    permission is exactly $pagelevel.

bool isLoggedOn()

    The function isLoggedOn() returns TRUE if the user is logged on.

void Logout()

    The function Logout() logs out the current user.

4. COPYRIGHT NOTICE

AuthClassed, copyright Rob Hanssen 2002. This program is free software; you can
redistribute it and/or modify it under the terms of the GNU General Public License as published
by the Free Software Foundation.