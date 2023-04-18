# Introduzione

Questo è un progetto di test per la valutazioni delle capacità del candidato

# Come installare il progetto

Questo è un progetto basato su laravel. Puoi usare qualsiasi modo ti sia più congeniale per far avviare il progetto,
noi suggeriamo di utilizzare docker. Nel caso segui i passaggi riportati di seguito.

Alternativamente puoi utilizzare [laravel valet](https://laravel.com/docs/10.x/valet)

## Clona il repository

Se non l'hai già fatto clona il repository da github. Puoi clonare direttamente il nostro repository o, per semplicità, esegui un fork.
(p.s. se hai eseguito un fork modifica il path nel comando successivo con il path al tuo repository)

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

# Modifica il progetto e inviacelo

A questo punto troverai maggiori informazioni su cosa puoi fare con il progetto direttamente nella index:

```text
http://localhost
```

Fai le tue modifiche e poi consegnacelo in una delle seguenti modalità:

1. Cambia il remote con un tuo repository personale e inviaci il link al repository
2. Inviaci un pacchetto zip con il progetto da te modificato
