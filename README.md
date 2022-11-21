# Introduzione

Questo è un progetto di test per la valutazioni delle capacità del candidato

# Come installare il progetto

Questo è un progetto basato su laravel. Puoi usare qualsiasi modo ti sia più congeniale per far avviare il progetto,
noi suggeriamo di utilizzare docker. Nel caso segui i passaggi riportati di seguito:

## Clona il repository

Se non l'hai già fatto clona il repository da github

```shell
git clone git@github.com:Athomos-Github/Netsons-Test.git
```

oppure 

```
git clone https://github.com/Athomos-Github/Netsons-Test.git
```

## Spostati nella cartella del progetto

```shell
cd Netsons-Test
```

## Installa le dipendenze di composer

Per installare le dipendenze di composer utilizzeremo l'immagine docker ufficiale di composer:

```shell
docker run --rm --interactive --tty --volume $PWD:/app composer install --ignore-platform-reqs
```

## Configura il file .env

Parti dal file `.env.example` e crea il file `.env`

```shell
cp .env.example .env
```

È già sufficiente per far partire il progetto. Personalizza eventualmente il file `.env` in base alle tue necessità.

## Avvia il progetto 

Il progetto utilizza sail, una libreria di Laravel per l'integrazione con docker.
Utilizza sail per avviare i container

``` shell
./vendor/bin/sail up
```

oppure, se vuoi avviare in container in background:

```shell
./vendor/bin/sail up -d
```
