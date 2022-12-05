<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Plugin strings are defined here.
 *
 * @package     mod_googlemeet
 * @category    string
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'API key';
$string['checkweekdays'] = 'Seleccione los días de la semana que se encuentran dentro del rango de fechas seleccionado.';
$string['clientid'] = 'ID de cliente de OAuth ';
$string['clientid_desc'] = '<a href="https://github.com/ronefel/moodle-mod_googlemeet/wiki/How-to-create-the-API-key-and-OAuth-client-ID" target="_blank">How to create the API key and OAuth client ID</a>';
$string['date'] = 'Fecha';
$string['duration'] = 'Duración';
$string['earlierto'] = 'La fecha del evento no puede ser anterior a la fecha de inicio del curso. ({$a}).';
$string['emailcontent'] = 'Contenido de correo electrónico';
$string['emailcontent_default'] = '<p>Hola %userfirstname%,</p>
<p>Este recordatorio es para recordarle que habrá un evento de reunión de Google en %coursename%</p>
<p><b>%googlemeetname%</b></p>
<p>When: %eventdate% %duration% %timezone%</p>
<p>Enlace de acceso: %url%</p>';
$string['emailcontent_help'] = 'Cuando se envía una notificación a un estudiante, toma el contenido del correo electrónico de este campo. Se pueden utilizar los siguientes comodines:
<ul>
<li>%userfirstname%</li>
<li>%userlastname%</li>
<li>%coursename%</li>
<li>%googlemeetname%</li>
<li>%eventdate%</li>
<li>%duration%</li>
<li>%timezone%</li>
<li>%url%</li>
<li>%cmid%</li>
</ul>';
$string['entertheroom'] = 'Ingrese a la sala';
$string['eventdate'] = 'Fecha del evento';
$string['from'] = 'de (from)';
$string['generateurlroom'] = 'Generar URL de sala';
$string['googlemeet:addinstance'] = 'Añadir una nueva Google Meet™ para Moodle';
$string['googlemeet:editrecording'] = 'Editar grabaciones';
$string['googlemeet:removerecording'] = 'Eliminar grabaciones';
$string['googlemeet:syncgoogledrive'] = 'Sincronizar con Google Drive';
$string['googlemeet:view'] = 'Ver Google Meet™ para el contenido de Moodle';
$string['hide'] = 'Esconder';
$string['invalideventenddate'] = 'Esta fecha no puede ser anterior a la "Fecha del evento".';
$string['invalideventendtime'] = 'La hora de finalización debe ser mayor que la hora de inicio';
$string['invalidstoredurl'] = 'No se puede mostrar este recurso, la URL de Google Meet no es válida.';
$string['jstableinfo'] = 'Mostrando {start} hasta {end} de {rows} grabaciones';
$string['jstableinfofiltered'] = 'Mostrando {start} hasta {end} de {rows} grabaciones (filtrado de {rowsTotal} grabaciones)';
$string['jstableloading'] = 'Cargando...';
$string['jstablenorows'] = 'No se encontró ninguna grabación';
$string['jstableperpage'] = '{select} grabaciones por página';
$string['jstablesearch'] = 'Buscando...';
$string['lastsync'] = 'Última sincronización:';
$string['loading'] = 'Cargando';
$string['messageprovider:notification'] = 'Google Meet recordatorio de inicio de evento';
$string['minutesbefore'] = 'Minutos antes';
$string['minutesbefore_help'] = 'Número de minutos antes del inicio del evento cuando se debe enviar la notificación.';
$string['modulename'] = 'Google Meet™ para Moodle';
$string['modulename_help'] = 'El módulo Google Meet™ para Moodle permite al profesor crear una sala de Google Meet como recurso del curso y, después de las reuniones, poner a disposición de los estudiantes las grabaciones guardadas en Google Drive.
<p>©2018 Google LLC All rights reserved.<br/>
Google Meet and the Google Meet logo are registered trademarks of Google LLC.</p>
';
$string['modulenameplural'] = 'Google Meet™ para Moodle instances';
$string['multieventdateexpanded'] = 'Se amplió la repetición de la fecha del evento';
$string['multieventdateexpanded_desc'] = 'Mostrar la configuración de "Recurrencia de la fecha del evento" como expandida de manera predeterminada al crear una nueva sala.';
$string['name'] = 'Nombre';
$string['never'] = 'Nunca';
$string['notfoundrecordingname'] = 'No se encontró ninguna grabación con el nombre';
$string['notfoundrecordingsfolder'] = 'No se encontró la carpeta "Meet Recordings" en Google Drive.';
$string['notification'] = 'Notificación';
$string['notificationexpanded'] = 'Notificación ampliada';
$string['notify'] = 'Enviar notificación al alumno';
$string['notify_help'] = 'Si está marcado, se enviará una notificación al estudiante sobre la fecha de inicio del evento.';
$string['notifycationexpanded_desc'] = 'Muestra la configuración de "Notificación" expandida de forma predeterminada al crear una nueva sala.';
$string['notifytask'] = 'Google Meet™ tarea de notificación de Moodle';
$string['notpossiblesync'] = 'No es posible sincronizar con una cuenta que no sea la que creó la sala.';
$string['or'] = 'o';
$string['play'] = 'Play';
$string['pluginadministration'] = 'Administración de Google Meet™ para Moodle';
$string['pluginname'] = 'Google Meet™ para Moodle';
$string['privacy:metadata:googlemeet_notify_done'] = 'Registra las notificaciones enviadas a los usuarios sobre el inicio de los eventos. Estos datos son temporales y se eliminan después de la fecha de inicio del evento.';
$string['privacy:metadata:googlemeet_notify_done:eventid'] = 'El ID del evento';
$string['privacy:metadata:googlemeet_notify_done:userid'] = 'El ID de usuario';
$string['privacy:metadata:googlemeet_notify_done:timesent'] = 'La marca de tiempo que indica cuándo el usuario recibió una notificación.';
$string['earlierto'] = 'La fecha del evento no puede ser anterior a la fecha de inicio del curso. ({$a}).';
$string['recording'] = 'Grabación';
$string['recordings'] = 'Grabaciones';
$string['recordingswiththename'] = 'Grabaciones con el nombre:';
$string['recurrenceeventdate'] = 'Recurrencia de la fecha del evento';
$string['recurrenceeventdate_help'] = 'Esta función permite crear múltiples recurrencias a partir de la fecha del evento.
<br>* <strong>Repetir en</strong>: Seleccione los días de la semana en los que se reunirá su clase (por ejemplo, lunes / miércoles / viernes).
<br>* <strong>Repite cada</strong>: Esto permite un ajuste de frecuencia. Si su clase se reunirá todas las semanas, seleccione 1; se reunirá cada dos semanas, seleccione 2; cada 3 semanas, seleccione 3, etc.
<br>* <strong>Repetir hasta</strong>: Seleccione el último día de la reunión (el último día en el que desea tomar la fecha recurrente del evento).
';
$string['repeatasfollows'] = 'Repita la fecha del evento anterior de la siguiente manera';
$string['repeatevery'] = 'Repite cada';
$string['repeaton'] = 'Repetir en';
$string['repeatuntil'] = 'Repetir hasta';
$string['requirednamefield'] = 'Ingrese el nombre de la habitación para crear automáticamente.';
$string['roomcreator'] = 'Creador de la sala:';
$string['roomname'] = 'Nombre de la sala';
$string['roomurl'] = 'URL de la sala';
$string['roomurlexpanded'] = 'Se expandió la URL de la sala';
$string['roomurlexpanded_desc'] = 'Muestra la configuración de "URL de la sala" como expandida de forma predeterminada al crear una nueva sala.';
$string['show'] = 'Mostrar';
$string['strftimedm'] = '%a. %d %b.';
$string['strftimedmy'] = '%a. %d %b. %Y';
$string['strftimedmyhm'] = '%a. %d %b. %Y %H:%M';
$string['strftimehm'] = '%H:%M';
$string['syncwithgoogledrive'] = 'Sincronizar con Google Drive';
$string['thereisnorecordingtoshow'] = 'No hay ninguna grabación para mostrar.';
$string['timeahead'] = 'No es posible crear múltiples recurrencias de la fecha del evento que excedan un año, ajuste las fechas de inicio y finalización.';
$string['timedate'] = '%d/%m/%Y %H:%M';
$string['to'] = 'para';
$string['today'] = 'Hoy';
$string['upcomingevents'] = 'Próximos Eventos';
$string['url_failed'] = 'Se requiere una URL válida de Google Meet';
$string['visible'] = 'Visible';
$string['week'] = 'Semana(s)';
