# ONEI-REST API
Servicio web de los clasificadores publicos  de la Oficina Nacional de Estad铆sticas e Informaci贸n (ONEI) de Cuba  

## Comenzando 馃殌


### Pre-requisitos 

- Composer https://getcomposer.org/
- PHP 7.4+
- Habilitar en el php.ini las extensiones para trabajar con sqlite

### Instalaci贸n

```bash
$ git clone https://github.com/carlosgg21/onei-api.git
```
```
$ cd onei-rest
$ composer install
```


## Funciones actuales 

- Listado de las provincias
- Provincia por c贸digo			
- Listado de los municipios
- Municipio por c贸digo
- Municipios por c贸digo de provincia			
- Listado de las formas organizativas
- Forma organizativa por por c贸digo
- Listado de paises
- Pa铆s por c贸digo
- Paises por c贸digo de la regi贸n
- Listado de uniones 
- Listado de uniones activas
- Uni贸n por c贸digo
- Listado de organismos
- Listado de organismos activos
- Organismos por c贸digo
- Listado de instituciones 
- Instituci贸n por c贸digo

## Pr贸ximas funciones

- Documentaci贸n de la API con Swagger
- Seguridad con API Token

## API Routes
| HTTP Method	| Path | Action  | Desciption  |
| ----- | ----- | ----- |------------- |
| GET      | /api/v1/provinces | index |  Get all provinces
| GET      | /api/v1/provinces/{code}| show |  Get specific province
| GET      | /api/v1/townships | index |  Get all townships
| GET      | /api/v1/townships/{code}| show |  Get specific township
| GET      | /api/v1/townships/province/{provinceID}| township | Get All the townships that belong to the province 
| GET      | /api/v1/forms | index |  Get all organizational forms 
| GET      | /api/v1/forms/{code}| show |  Get specific organizational form
| GET      | /api/v1/countries | index |  Get all countries
| GET      | /api/v1/countries/{code}| show |  Get specific country
| GET      | /api/v1/countries/region/{regionId}| countries | Get All the countries that belong to the region 
| GET      | /api/v1/unions | index |  Get all unions
| GET      | /api/v1/unions/active| active |  Get all the active unions
| GET      | /api/v1/unions/{code}| show |  Get specific union
| GET      | /api/v1/organisms | index |  Get all organisms
| GET      | /api/v1/organisms/active| active |  Get all the active organisms
| GET      | /api/v1/organisms/{code}| show |  Get specific organism
| GET      | /api/v1/institutions | index |  Get all institutions
| GET      | /api/v1/institutions/{code}| show |  Get specific institution

## Tecnolog铆a utilizada en el proyecto. 
 Lumen (8.2.3) (Laravel Components ^8.0)
