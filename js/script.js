/* 
 * be.ctrl.benefactor JavaScript
 */
 
console.log("benefactor js loaded");

CRM.api('Contact', 'get', {'sequential': 1}, { success: function(data) { console.log(data); cj.each(data, function(key, value) { console.log(key + value); }); } });