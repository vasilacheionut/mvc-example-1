# 📦 PHP MVC Mini Framework mvc-example-1

Un exemplu simplu de arhitectură **MVC** în PHP, pentru începători.


## 📁 Structura directorului

```
/mvc-example-1
├── index.php # Punctul de intrare în aplicație
├── controllers/
│ └── UserController.php # Controllerul care leagă datele și afișarea
├── models/
│ └── UserModel.php # Modelul care returnează date
└── views/
└── user_list.php # View-ul care afișează lista de utilizatori

```

## ▶️ Cum se folosește

```
1. Copiază tot proiectul într-un folder, ex: `mvc-example`
2. Pornește un server local:
bash
   php -S localhost:8000
3. Accesează în browser:
   http://localhost:8000/index.php
4. Vei vedea o listă de utilizatori afișată cu ajutorul arhitecturii MVC.

```


## 🔧 Explicații
```
Model (UserModel): Returnează o listă de utilizatori (hardcodată în acest exemplu).
Controller (UserController): Apelează modelul și trimite datele spre view.
View (user_list.php): Primește date și le afișează în HTML.
```


## 🧠 Scop
```
Acest proiect este pentru învățare. 
Nu folosește routing avansat, baze de date reale sau sisteme de templating. 
Dar te ajută să înțelegi conceptul MVC.
```


## ✅ Autor
```
Creat pentru a învăța arhitectura MVC în PHP. Poți extinde cu:
Funcții CRUD
Routing dinamic
Conexiuni la MySQL
```