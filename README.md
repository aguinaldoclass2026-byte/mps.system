# MPS Result System (PHP + HTML + CSS)

Based on `MPS_Term-Result.xlsx` (Grade 6 – Aguinaldo, Bonifacio, Rizal, Mabini; Science, English, Math,
Filipino, AP, ESP/GMRC, EPP, MAPEH; Male/Female; five proficiency levels).

## Requirements
PHP 7.4+ (8.x recommended) with `pdo_mysql` and MySQL / MariaDB (included in XAMPP / Laragon / WAMP).

## Install (XAMPP example)
1. Copy the `mps_system` folder into `C:\xampp\htdocs\`.
2. Start **Apache** and **MySQL** in the XAMPP Control Panel.
3. Open http://localhost/phpmyadmin -> **Import** -> choose `database/mps_system.sql` -> Go
   (this creates the `mps_system` database, all tables and the default admin).
4. If your MySQL user/password is not `root` / empty, edit `includes/config.php`.
5. Open http://localhost/mps_system/

(Optional) Set `'driver' => 'sqlite'` in `includes/config.php` to run without MySQL; the file `data/mps.sqlite3` is then created automatically.

## Default admin
Username: `admin`   Password: `admin123`   -> change it in Admin > User Accounts > Edit / Reset password.

## Printing A4 PDF
Open any "Print ... (A4 PDF)" button -> press **Print / Save as A4 PDF** -> Destination **Save as PDF**, Paper size **A4**.
MPS summary prints landscape; proficiency summary prints portrait.

## Computation (same as the Excel template)
* % = raw score / total items x 100
* MPS = mean of the students' % (per section, per sex, per subject); Total = (Male + Female) / 2
* Grade-level total = average of its sections
* Levels: Highly Proficient 90-100, Proficient 75-89, Nearly Proficient 50-74, Low Proficient 25-49, Not Proficient 0-24
