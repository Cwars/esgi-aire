To CHECK : https://openclassrooms.com/courses/choisir-les-bons-types-de-colonne-sql  
https://jeanphi.net/blog/2014/06/securite-phpmyadmin-le-baba 

Il est important de bien comprendre les usages et particularités de chaque type de données, afin de choisir le meilleur type possible lorsque vous définissez les colonnes de vos tables. En effet, choisir un mauvais type de données pourrait entraîner :

    - un gaspillage de mémoire (ex. : si vous stockez de toutes petites données dans une colonne faite pour stocker de grosses quantités de données) ;

    - des problèmes de performance (ex. : il est plus rapide de faire une recherche sur un nombre que sur une chaîne de caractères) ;

    - un comportement contraire à celui attendu (ex. : trier sur un nombre stocké comme tel, ou sur un nombre stocké comme une chaîne de caractères ne donnera pas le même résultat) ;

    - l'impossibilité d'utiliser des fonctionnalités propres à un type de données (ex. : stocker une date comme une chaîne de caractères vous prive des nombreuses fonctions temporelles disponibles).
    
    
phpMyAdmin vous demande beaucoup d'informations mais rassurez-vous, il n'est pas nécessaire de tout remplir. La plupart du temps, les sections les plus intéressantes seront :

    Champ : permet de définir le nom du champ (très important !) ;

    Type : le type de données que va stocker le champ (nombre entier, texte, date…) ;

    Taille/Valeurs : permet d'indiquer la taille maximale du champ, utile pour le typeVARCHARnotamment, afin de limiter le nombre de caractères autorisés ;

    Index : active l'indexation du champ. Ce mot barbare signifie dans les grandes lignes que votre champ sera adapté aux recherches. Le plus souvent, on utilise l'indexPRIMARYsur les champs de typeid ;

    AUTO_INCREMENT : permet au champ de s'incrémenter tout seul à chaque nouvelle entrée. On l'utilise fréquemment sur les champs de typeid.



Types numériques

        Type    Nb d'octect    Min             Max   
        TINYINT   1           -128             127
        SMALLINT  2           32768           32767
        MEDIUMINT 3         -8388608         8388607
        INT       4        -2147483648      2147483647
        BIGINT    8 -9223372036854775808  9223372036854775807
        
Texte court (moins de 255 caractères), vous pouvez utiliser les types CHAR et VARCHAR. 

Dans le cas où le texte fait la longueur maximale autorisée, un CHAR(x) prend moins de place en mémoire qu'un VARCHAR(x). 
Préférez donc le CHAR(x) dans le cas où vous savez que vous aurez toujours x caractères (par exemple si vous stockez un code postal).
Par contre, si la longueur de votre texte risque de varier d'une ligne à l'autre, définissez votre colonne comme un VARCHAR(x).

Texte long (plus de 255 caractères)

    
        Type         Longueur Max         Mémoire occupée
        TINYTEXT     2^8﻿ octets    Longueur de la chaîne + 1 octets
        TEXT         2^16﻿ octets   Longueur de la chaîne + 2 octets
        MEDIUMTEXT   2^24 octets   Longueur de la chaîne + 3 octets
        LONGTEXT     2^32 octets   Longueur de la chaîne + 4 octets
        
        
Il est important de toujours utiliser le type de données adapté à la situation.

https://openclassrooms.com/courses/choisir-les-bons-types-de-colonne-sql 

https://openclassrooms.com/courses/administrez-vos-bases-de-donnees-avec-mysql/creation-de-tables 
https://stackoverflow.com/questions/2288628/whats-the-difference-between-varchar255-and-tinytext-string-types-in-mysql

