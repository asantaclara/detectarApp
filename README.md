<p align="center">
<img src="public/images/view_images/logo_icon.png" width="100">
</p>

# DetectAR

Sistema orientativo para la detección de señales de alerta de dificultades del aprendizaje en niños en Argentina en 2021

## Tecnologías

- **[PHP 8.0](https://www.php.net/downloads.php#v8.0.12)**
- **[Laravel 6.0](https://laravel.com/docs/8.x)**
- **[Laravel Sail 8.0](https://laravel.com/docs/8.x/sail)**
- **[MySQL 8.0](https://www.mysql.com/)**
- **[Docker 20.10](https://www.docker.com/)**

## Instalación

### Desde git

- Clonar este repositorio en una computadora con Linux
```bash
git clone git@github.com:asantaclara/detectarApp.git
```

- En la raiz del proyecto, copiar el archivo <code>.env.example</code> a <code>.env</code> utilizando el siguiente comando, y configurar a gusto (O utilizar el archivo provisionado)
```bash
cp .env.example .env
```

- En la raiz del proyecto ejecutar el siguiente comando, esto instalará PHP, docker y docker-compose, junto a sus dependencias:
```bash
sh install.sh
```

### Desde el archivo comprimido

- En la raiz del proyecto ejecutar el siguiente comando, esto instalará PHP, docker y docker-compose, junto a sus dependencias:
```bash
sh install.sh
```

## Uso

- El proyecto está configurado para correr en el puerto 80, por lo tanto debe estar libre. Para ver los procesos corriendo en el puerto 80 ejecutar:
```bash
sudo lsof -i -P -n | grep 80
```
- Usualmente está corriendo Apache, ejecutando el siguiente comando se puede detener:
```bash
sudo service apache2 stop
```

- Para iniciar el proyecto correr el siguiente comando:
```bash
sh run.sh
```
- Esperar unos minutos a que Docker inicialice el entorno.

- El proyecto corre en el puerto 80, usted debería poder entrar ingresando [aquí](http://localhost)

## Soporte

En caso de necesitar ayuda, comununicarse por mail a las siguientes direcciones:

- Camila Inversi: cinversi@uade.edu.ar
- Alejandro Santa Clara: asantaclara@uade.edu.ar
