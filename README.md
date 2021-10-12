# ONEI-REST API
Servicio web de los clasificadores publicos  de la Oficina Nacional de Estadísticas e Información (ONEI) de Cuba  

## Comenzando 🚀

```bash
$ https://github.com/carlosgg21/onei-api.git
```
```
$ cd onei-rest
$ composer install
```


## Funciones actuales 

- Listado de las provincias
- Provincia por código			
- Listado de los municipios
- Municipio por código
- Municipios por código de provincia			
- Listado de las formas organizativas
- Forma organizativa por por código
- Listado de paises
- País por código
- Paises por código de la región
- Listado de uniones 
- Listado de uniones activas
- Unión por código
- Listado de organismos
- Listado de organismos activos
- Organismos por código
- Listado de instituciones 
- Institución por código

## Próximas funciones

- Documentación de la API con Swagger
- Seguridad con API Token

## API Routes
| HTTP Method	| Path | Action  | Desciption  |
| ----- | ----- | ----- | ---- |------------- |
| GET      | /api/v1/provinces | index |  Get all provinces
| GET      | /api/v1/provinces/{code}| show |  Get specific province
| GET      | /api/v1/townships | index |  Get all townships
| GET      | /api/v1/townships/{code}| show |  Get specific townships
| GET      | /api/v1/townships/province/{provinceID}| township | Get All the townships that belong to the province 
| GET      | /api/v1/forms | index |  Get all organizational forms 
| GET      | /api/v1/forms/{code}| show |  Get specific organizational form
| GET      | /api/v1/countries | index |  Get all countries
| GET      | /api/v1/countries/{code}| show |  Get specific country
| GET      | /api/v1/countries/region/{regionId}| countries | Get All the countries that belong to the region 
| GET      | /api/v1/unions | index |  Get all unions
| GET      | /api/v1/unions/active| active |  Get all the active uniones
| GET      | /api/v1/unions/{code}| show |  Get specific union
| GET      | /api/v1/organisms | index |  Get all organisms
| GET      | /api/v1/organisms/active| active |  Get all the active organisms
| GET      | /api/v1/organisms/{code}| show |  Get specific organism
| GET      | /api/v1/institutions | index |  Get all institutions
| GET      | /api/v1/institutions/{code}| show |  Get specific institution

## Tecnología utilizada en el proyecto. 
 Lumen (8.2.3) (Laravel Components ^8.0)
