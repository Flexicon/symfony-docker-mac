# Basic Symfony 4 setup with docker-sync

Example of using `docker-sync` for developing a symfony application on OSX.

Running the example
---

```
$ cd .docker
$ docker-sync-stack start
```

If everything went okay, then the app should be listening on `http://localhost:8500` and there should be an example endpoint `/foo` available.

Stats
---

I tested and compared different solutions for running symfony in docker on a Mac, these are the average results

```
Docker for symphony

Default volume sync     ~800ms

Docker cached flag      ~300ms

Docker-sync             ~50ms
```
