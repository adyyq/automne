<?php
// +----------------------------------------------------------------------+
// | Automne (TM)														  |
// +----------------------------------------------------------------------+
// | Copyright (c) 2000-2012 WS Interactive								  |
// +----------------------------------------------------------------------+
// | Automne is subject to version 2.0 or above of the GPL license.		  |
// | The license text is bundled with this package in the file			  |
// | LICENSE-GPL, and is available through the world-wide-web at		  |
// | http://www.gnu.org/copyleft/gpl.html.								  |
// +----------------------------------------------------------------------+
// | Author: S�bastien Pauchet <sebastien.pauchet@ws-interactive.fr>	  |
// +----------------------------------------------------------------------+
require_once(dirname(__FILE__).'/../../cms_rc_admin.php');
echo base64_decode('
PCFET0NUWVBFIGh0bWw+IAo8aHRtbD4KPGhlYWQ+Cjx0aXRsZT5KYXZhc2NyaXB0IFRldHJpczwvdGl0bGU+CjwhLS0KQ29weXJpZ2h0IChjKSAyMDExIEpha2UgR29yZG9uIGFuZCBjb250cmlidXRvcnMKUGVybWlzc2lvbiBpcyBoZXJlYnkgZ3JhbnRlZCwgZnJlZSBvZiBjaGFyZ2UsIHRvIGFueSBwZXJzb24gb2J0YWluaW5nIGEgY29weQpvZiB0aGlzIHNvZnR3YXJlIGFuZCBhc3NvY2lhdGVkIGRvY3VtZW50YXRpb24gZmlsZXMgKHRoZSAiU29mdHdhcmUiKSwgdG8gZGVhbAppbiB0aGUgU29mdHdhcmUgd2l0aG91dCByZXN0cmljdGlvbiwgaW5jbHVkaW5nIHdpdGhvdXQgbGltaXRhdGlvbiB0aGUgcmlnaHRzCnRvIHVzZSwgY29weSwgbW9kaWZ5LCBtZXJnZSwgcHVibGlzaCwgZGlzdHJpYnV0ZSwgc3VibGljZW5zZSwgYW5kL29yIHNlbGwKY29waWVzIG9mIHRoZSBTb2Z0d2FyZSwgYW5kIHRvIHBlcm1pdCBwZXJzb25zIHRvIHdob20gdGhlIFNvZnR3YXJlIGlzCmZ1cm5pc2hlZCB0byBkbyBzbywgc3ViamVjdCB0byB0aGUgZm9sbG93aW5nIGNvbmRpdGlvbnM6ClRoZSBhYm92ZSBjb3B5cmlnaHQgbm90aWNlIGFuZCB0aGlzIHBlcm1pc3Npb24gbm90aWNlIHNoYWxsIGJlIGluY2x1ZGVkIGluIGFsbApjb3BpZXMgb3Igc3Vic3RhbnRpYWwgcG9ydGlvbnMgb2YgdGhlIFNvZnR3YXJlLgpUSEUgU09GVFdBUkUgSVMgUFJPVklERUQgIkFTIElTIiwgV0lUSE9VVCBXQVJSQU5UWSBPRiBBTlkgS0lORCwgRVhQUkVTUyBPUgpJTVBMSUVELCBJTkNMVURJTkcgQlVUIE5PVCBMSU1JVEVEIFRPIFRIRSBXQVJSQU5USUVTIE9GIE1FUkNIQU5UQUJJTElUWSwKRklUTkVTUyBGT1IgQSBQQVJUSUNVTEFSIFBVUlBPU0UgQU5EIE5PTklORlJJTkdFTUVOVC4gSU4gTk8gRVZFTlQgU0hBTEwgVEhFCkFVVEhPUlMgT1IgQ09QWVJJR0hUIEhPTERFUlMgQkUgTElBQkxFIEZPUiBBTlkgQ0xBSU0sIERBTUFHRVMgT1IgT1RIRVIKTElBQklMSVRZLCBXSEVUSEVSIElOIEFOIEFDVElPTiBPRiBDT05UUkFDVCwgVE9SVCBPUiBPVEhFUldJU0UsIEFSSVNJTkcgRlJPTSwKT1VUIE9GIE9SIElOIENPTk5FQ1RJT04gV0lUSCBUSEUgU09GVFdBUkUgT1IgVEhFIFVTRSBPUiBPVEhFUiBERUFMSU5HUyBJTiBUSEUKU09GVFdBUkUuCi0tPgo8c3R5bGU+CmJvZHl7IGZvbnQtZmFtaWx5OiBIZWx2ZXRpY2EsIHNhbnMtc2VyaWY7IH0KI3RldHJpc3sgbWFyZ2luOiAxZW0gYXV0bzsgcGFkZGluZzogMWVtOyBib3JkZXI6IDRweCBzb2xpZCBibGFjazsgYm9yZGVyLXJhZGl1czogMTBweDsgYmFja2dyb3VuZC1jb2xvcjogI0Y4RjhGODsgfQojY2FudmFzeyBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7IHZlcnRpY2FsLWFsaWduOiB0b3A7IGJveC1zaGFkb3c6IDEwcHggMTBweCAxMHB4ICM5OTk7IGJvcmRlcjogMnB4IHNvbGlkICMzMzM7IH0KI21lbnV7IGRpc3BsYXk6IGlubGluZS1ibG9jazsgdmVydGljYWwtYWxpZ246IHRvcDsgcG9zaXRpb246IHJlbGF0aXZlOyB9CiNtZW51IHB7IG1hcmdpbjogMC41ZW0gMDsgdGV4dC1hbGlnbjogY2VudGVyOyB9CiNtZW51IHAgYXsgdGV4dC1kZWNvcmF0aW9uOiBub25lOyBjb2xvcjogYmxhY2s7IH0KI3VwY29taW5neyBkaXNwbGF5OiBibG9jazsgbWFyZ2luOiAwIGF1dG87IGJhY2tncm91bmQtY29sb3I6ICNFMEUwRTA7IH0KI3Njb3JleyBjb2xvcjogcmVkOyBmb250LXdlaWdodDogYm9sZDsgdmVydGljYWwtYWxpZ246IG1pZGRsZTsgfQojcm93c3sgY29sb3I6IGJsdWU7IGZvbnQtd2VpZ2h0OiBib2xkOyB2ZXJ0aWNhbC1hbGlnbjogbWlkZGxlOyB9CkBtZWRpYSBzY3JlZW4gYW5kIChtaW4td2lkdGg6ICAgMHB4KSBhbmQgKG1pbi1oZWlnaHQ6ICAgMHB4KSAgeyAjdGV0cmlzIHsgZm9udC1zaXplOiAwLjc1ZW07IHdpZHRoOiAyNTBweDsgfSAjbWVudSB7IHdpZHRoOiAxMDBweDsgaGVpZ2h0OiAyMDBweDsgfSAjdXBjb21pbmcgeyB3aWR0aDogIDUwcHg7IGhlaWdodDogIDUwcHg7IH0gI2NhbnZhcyB7IHdpZHRoOiAxMDBweDsgaGVpZ2h0OiAyMDBweDsgfSB9IC8qIDEwcHggY2h1bmtzICovCkBtZWRpYSBzY3JlZW4gYW5kIChtaW4td2lkdGg6IDQwMHB4KSBhbmQgKG1pbi1oZWlnaHQ6IDQwMHB4KSAgeyAjdGV0cmlzIHsgZm9udC1zaXplOiAxLjAwZW07IHdpZHRoOiAzNTBweDsgfSAjbWVudSB7IHdpZHRoOiAxNTBweDsgaGVpZ2h0OiAzMDBweDsgfSAjdXBjb21pbmcgeyB3aWR0aDogIDc1cHg7IGhlaWdodDogIDc1cHg7IH0gI2NhbnZhcyB7IHdpZHRoOiAxNTBweDsgaGVpZ2h0OiAzMDBweDsgfSB9IC8qIDE1cHggY2h1bmtzICovCkBtZWRpYSBzY3JlZW4gYW5kIChtaW4td2lkdGg6IDUwMHB4KSBhbmQgKG1pbi1oZWlnaHQ6IDUwMHB4KSAgeyAjdGV0cmlzIHsgZm9udC1zaXplOiAxLjI1ZW07IHdpZHRoOiA0NTBweDsgfSAjbWVudSB7IHdpZHRoOiAyMDBweDsgaGVpZ2h0OiA0MDBweDsgfSAjdXBjb21pbmcgeyB3aWR0aDogMTAwcHg7IGhlaWdodDogMTAwcHg7IH0gI2NhbnZhcyB7IHdpZHRoOiAyMDBweDsgaGVpZ2h0OiA0MDBweDsgfSB9IC8qIDIwcHggY2h1bmtzICovCkBtZWRpYSBzY3JlZW4gYW5kIChtaW4td2lkdGg6IDYwMHB4KSBhbmQgKG1pbi1oZWlnaHQ6IDYwMHB4KSAgeyAjdGV0cmlzIHsgZm9udC1zaXplOiAxLjUwZW07IHdpZHRoOiA1NTBweDsgfSAjbWVudSB7IHdpZHRoOiAyNTBweDsgaGVpZ2h0OiA1MDBweDsgfSAjdXBjb21pbmcgeyB3aWR0aDogMTI1cHg7IGhlaWdodDogMTI1cHg7IH0gI2NhbnZhcyB7IHdpZHRoOiAyNTBweDsgaGVpZ2h0OiA1MDBweDsgfSB9IC8qIDI1cHggY2h1bmtzICovCkBtZWRpYSBzY3JlZW4gYW5kIChtaW4td2lkdGg6IDcwMHB4KSBhbmQgKG1pbi1oZWlnaHQ6IDcwMHB4KSAgeyAjdGV0cmlzIHsgZm9udC1zaXplOiAxLjc1ZW07IHdpZHRoOiA2NTBweDsgfSAjbWVudSB7IHdpZHRoOiAzMDBweDsgaGVpZ2h0OiA2MDBweDsgfSAjdXBjb21pbmcgeyB3aWR0aDogMTUwcHg7IGhlaWdodDogMTUwcHg7IH0gI2NhbnZhcyB7IHdpZHRoOiAzMDBweDsgaGVpZ2h0OiA2MDBweDsgfSB9IC8qIDMwcHggY2h1bmtzICovCkBtZWRpYSBzY3JlZW4gYW5kIChtaW4td2lkdGg6IDgwMHB4KSBhbmQgKG1pbi1oZWlnaHQ6IDgwMHB4KSAgeyAjdGV0cmlzIHsgZm9udC1zaXplOiAyLjAwZW07IHdpZHRoOiA3NTBweDsgfSAjbWVudSB7IHdpZHRoOiAzNTBweDsgaGVpZ2h0OiA3MDBweDsgfSAjdXBjb21pbmcgeyB3aWR0aDogMTc1cHg7IGhlaWdodDogMTc1cHg7IH0gI2NhbnZhcyB7IHdpZHRoOiAzNTBweDsgaGVpZ2h0OiA3MDBweDsgfSB9IC8qIDM1cHggY2h1bmtzICovCkBtZWRpYSBzY3JlZW4gYW5kIChtaW4td2lkdGg6IDkwMHB4KSBhbmQgKG1pbi1oZWlnaHQ6IDkwMHB4KSAgeyAjdGV0cmlzIHsgZm9udC1zaXplOiAyLjI1ZW07IHdpZHRoOiA4NTBweDsgfSAjbWVudSB7IHdpZHRoOiA0MDBweDsgaGVpZ2h0OiA4MDBweDsgfSAjdXBjb21pbmcgeyB3aWR0aDogMjAwcHg7IGhlaWdodDogMjAwcHg7IH0gI2NhbnZhcyB7IHdpZHRoOiA0MDBweDsgaGVpZ2h0OiA4MDBweDsgfSB9IC8qIDQwcHggY2h1bmtzICovCjwvc3R5bGU+CjwvaGVhZD4gCjxib2R5PiAKPGRpdiBpZD0idGV0cmlzIj4KPGRpdiBpZD0ibWVudSI+CjxwIGlkPSJzdGFydCI+PGEgaHJlZj0iamF2YXNjcmlwdDpwbGF5KCk7Ij5QcmVzcyBTcGFjZSB0byBQbGF5LjwvYT48L3A+CjxwPjxjYW52YXMgaWQ9InVwY29taW5nIj48L2NhbnZhcz48L3A+CjxwPnNjb3JlIDxzcGFuIGlkPSJzY29yZSI+MDAwMDA8L3NwYW4+PC9wPgo8cD5yb3dzIDxzcGFuIGlkPSJyb3dzIj4wPC9zcGFuPjwvcD4KPC9kaXY+CjxjYW52YXMgaWQ9ImNhbnZhcyI+ClNvcnJ5LCB0aGlzIGdhbWUgY2Fubm90IGJlIHJ1biBiZWNhdXNlIHlvdXIgYnJvd3NlciBkb2VzIG5vdCBzdXBwb3J0IHRoZSAmbHQ7Y2FudmFzJmd0OyBlbGVtZW50CjwvY2FudmFzPgo8cD4KQWxzbyBhdmFpbGFibGUgd2l0aCBLb25hbWkgY29kZSwgZW5qb3kgIQo8L3A+CkNhbm5lbGxlJm5ic3A7CjxpbWcgc3JjPSJkYXRhOmltYWdlL2dpZjtiYXNlNjQsClIwbEdPRGxoTWdBbUFJUUFNVEFtR0xhVFg5VE93WFJkUGN5d2hLQ0JWZkRvM01lY1lwQjJVdW5Qck55dWFvZHNTVmRFTGJTbWtkZW5ZN1dPV3V2ZnpzekNzV3RVTmVQQmxVbzVJZnorL0t1YmlNRzVySHhvU2FXSFhKR0FiTnpYMFZ4TE03U2NkUGJ4NnVDNGdTSCtORVZrYVhSbFpDQmllU0JRWVhWc0lGTm9aWEp0WVc0Z1ptOXlJRmRRUTJ4cGNHRnlkQ3dnVUhWaWJHbGpJRVJ2YldGcGJnQUFMQUFBQUFBeUFDWUFCQVgrWUNXT1pHbVNYdklkem1TY2NDd2F5ZlI5VXdKNXBqRTV3R0NMSnlzYVBzTGtKMkV3UUg0T3hTRlR5QVJZamsweGxnQXFrdURrbzFBbEZ4NnN6MnRMZ2tvVjhHOFVuanlNcVdRMFM1NGdicnRTYUZJSFdBNkVEMUYyWkZRWkdZWUJrSHRSZlVaQVl3Y0tEM2dabWxRUFVvdGxpQUZtWnc5WFhqcFBMaVVyVkpoalpXYXZEbVY0aUZLTkJZUXNCd0ZmaEE0UEN3b2tCZ2RrdjdHTVZZekN0bWRTVWM0SUdCbkF2QTRaREFkdENJMkdzODIyVTlCQUFjKzdCd1BzR1lSeFVROFBKS1M3dGRCNG9xRUY2STJNMXdjV1NGaUFTdzRXQlVRZzRFbW5pOG9BYU0wODVTTkRLTU9DaDRuc2FQeXlSc0NDTStVMkZXakhiQk9lQlJqK0Jud3J0MkNCbFZ1OXZpUVEwZURocVNvSUpBeXdxSE9jTFFUVjJPbDhXTURsUjVIdTZMUVFrVUhDdHpMc0JxUmtoL09vdzZoWXlUemMyYkFLQmdtWUJqUVFJZEFsVHF4UnRUNGRpVlpvQVFUc01JaXJNb0JDZ1V3VFJFeUZpblVvWEtMRGhxSjFXa0FDaG8vZkxCSjBKNmhZQmFGbTIySzFkclZ2MUk5VVc0NVJ1VWhTM3F3Q0piTXpHMXF5NFFKZmdhcjhLdGVmb1RSWVVVWWRTaHZCWnN0OWkrb3NQY0R3QWdSa0ZnQUF3RUcwNkxQRzQyWXdQdlJNWFExVGsvZCthTkYwWDh5bUpleEdjS0VDYjlwQ3NUYjZQbGpvNGRuYU9SUm9FRUVBaEJFNXBjZjFLcit0QkE0TUtGaUFvVUV3ODlhOHpjWWNBL2t0RUlNRzlaSHJSSjUwK09FWFFRd1dDQVplVzFWY2xKMTlCRktBZ1F3WCtGZGVXaG44TlpoTFg0VW5BUU1jVURCV0RBYUlKcUYyWm5rb3dZb0NERVlnQTFySTBKK05ITUNJZ0FVWFBDQ2lUazZONEVGMHZSRTR3QllSQ25naWZqaU9jTnRzKzhFbllYNGFiQ0dBakNqaUo4QUlCTEJGSlFsTkNwVmlsVVVneVU2REtvNnd3VnNTb2xsQmg3UGw5eUNUUFU1SFpJWVlyTkhCVzdOOTZTWmFLSzVSaEFjV1lYQ1lvbDl4NEdpT0J1QUJsRzJDaWhBZk94UXN5WWFSUEhqZ2FRVk5sR0JBQjZjRTBBR3BPVlpnUVhGcmNwRHFwckRLWUlBR0YwbEFBUVVNZEJmcnJqSkFJSUFGQ3pDUVpRd2hBQUE3Ii8+CjwvZGl2Pgo8c2NyaXB0PgpmdW5jdGlvbiBnZXQoaWQpe3JldHVybiBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChpZCk7fTtmdW5jdGlvbiBoaWRlKGlkKXtnZXQoaWQpLnN0eWxlLnZpc2liaWxpdHk9J2hpZGRlbic7fTtmdW5jdGlvbiBzaG93KGlkKXtnZXQoaWQpLnN0eWxlLnZpc2liaWxpdHk9bnVsbDt9O2Z1bmN0aW9uIGh0bWwoaWQsaHRtbCl7Z2V0KGlkKS5pbm5lckhUTUw9aHRtbDt9O2Z1bmN0aW9uIHRpbWVzdGFtcCgpe3JldHVybiBuZXcgRGF0ZSgpLmdldFRpbWUoKTt9O2Z1bmN0aW9uIHJhbmRvbShtaW4sbWF4KXtyZXR1cm4obWluKyhNYXRoLnJhbmRvbSgpKihtYXgtbWluKSkpO307ZnVuY3Rpb24gcmFuZG9tQ2hvaWNlKGNob2ljZXMpe3JldHVybiBjaG9pY2VzW01hdGgucm91bmQocmFuZG9tKDAsY2hvaWNlcy5sZW5ndGgtMSkpXTt9O2lmKCF3aW5kb3cucmVxdWVzdEFuaW1hdGlvbkZyYW1lKXt3aW5kb3cucmVxdWVzdEFuaW1hdGlvbkZyYW1lPXdpbmRvdy53ZWJraXRSZXF1ZXN0QW5pbWF0aW9uRnJhbWV8fHdpbmRvdy5tb3pSZXF1ZXN0QW5pbWF0aW9uRnJhbWV8fHdpbmRvdy5vUmVxdWVzdEFuaW1hdGlvbkZyYW1lfHx3aW5kb3cubXNSZXF1ZXN0QW5pbWF0aW9uRnJhbWV8fGZ1bmN0aW9uKGNhbGxiYWNrLGVsZW1lbnQpe3dpbmRvdy5zZXRUaW1lb3V0KGNhbGxiYWNrLDEwMDAvNjApO319CnZhciBLRVk9e0VTQzoyNyxTUEFDRTozMixMRUZUOjM3LFVQOjM4LFJJR0hUOjM5LERPV046NDB9LERJUj17VVA6MCxSSUdIVDoxLERPV046MixMRUZUOjMsTUlOOjAsTUFYOjN9LGNhbnZhcz1nZXQoJ2NhbnZhcycpLGN0eD1jYW52YXMuZ2V0Q29udGV4dCgnMmQnKSx1Y2FudmFzPWdldCgndXBjb21pbmcnKSx1Y3R4PXVjYW52YXMuZ2V0Q29udGV4dCgnMmQnKSxzcGVlZD17c3RhcnQ6MC42LGRlY3JlbWVudDowLjAwNSxtaW46MC4xfSxueD0xMCxueT0yMCxudT01O3ZhciBkeCxkeSxibG9ja3MsYWN0aW9ucyxwbGF5aW5nLGR0LGN1cnJlbnQsbmV4dCxzY29yZSx2c2NvcmUscm93cyxzdGVwO3ZhciBpPXtpZDonaScsc2l6ZTo0LGJsb2NrczpbMHgwRjAwLDB4MjIyMiwweDAwRjAsMHg0NDQ0XSxjb2xvcjonY3lhbid9O3ZhciBqPXtpZDonaicsc2l6ZTozLGJsb2NrczpbMHg0NEMwLDB4OEUwMCwweDY0NDAsMHgwRTIwXSxjb2xvcjonYmx1ZSd9O3ZhciBsPXtpZDonbCcsc2l6ZTozLGJsb2NrczpbMHg0NDYwLDB4MEU4MCwweEM0NDAsMHgyRTAwXSxjb2xvcjonb3JhbmdlJ307dmFyIG89e2lkOidvJyxzaXplOjIsYmxvY2tzOlsweENDMDAsMHhDQzAwLDB4Q0MwMCwweENDMDBdLGNvbG9yOid5ZWxsb3cnfTt2YXIgcz17aWQ6J3MnLHNpemU6MyxibG9ja3M6WzB4MDZDMCwweDhDNDAsMHg2QzAwLDB4NDYyMF0sY29sb3I6J2dyZWVuJ307dmFyIHQ9e2lkOid0JyxzaXplOjMsYmxvY2tzOlsweDBFNDAsMHg0QzQwLDB4NEUwMCwweDQ2NDBdLGNvbG9yOidwdXJwbGUnfTt2YXIgej17aWQ6J3onLHNpemU6MyxibG9ja3M6WzB4MEM2MCwweDRDODAsMHhDNjAwLDB4MjY0MF0sY29sb3I6J3JlZCd9O2Z1bmN0aW9uIGVhY2hibG9jayh0eXBlLHgseSxkaXIsZm4pe3ZhciBiaXQscmVzdWx0LHJvdz0wLGNvbD0wLGJsb2Nrcz10eXBlLmJsb2Nrc1tkaXJdO2ZvcihiaXQ9MHg4MDAwO2JpdD4wO2JpdD1iaXQ+PjEpe2lmKGJsb2NrcyZiaXQpe2ZuKHgrY29sLHkrcm93KTt9CmlmKCsrY29sPT09NCl7Y29sPTA7Kytyb3c7fX19O2Z1bmN0aW9uIG9jY3VwaWVkKHR5cGUseCx5LGRpcil7dmFyIHJlc3VsdD1mYWxzZQplYWNoYmxvY2sodHlwZSx4LHksZGlyLGZ1bmN0aW9uKHgseSl7aWYoKHg8MCl8fCh4Pj1ueCl8fCh5PDApfHwoeT49bnkpfHxnZXRCbG9jayh4LHkpKQpyZXN1bHQ9dHJ1ZTt9KTtyZXR1cm4gcmVzdWx0O307ZnVuY3Rpb24gdW5vY2N1cGllZCh0eXBlLHgseSxkaXIpe3JldHVybiFvY2N1cGllZCh0eXBlLHgseSxkaXIpO307dmFyIHBpZWNlcz1bXTtmdW5jdGlvbiByYW5kb21QaWVjZSgpe2lmKHBpZWNlcy5sZW5ndGg9PTApCnBpZWNlcz1baSxpLGksaSxqLGosaixqLGwsbCxsLGwsbyxvLG8sbyxzLHMscyxzLHQsdCx0LHQseix6LHosel07dmFyIHR5cGU9cGllY2VzLnNwbGljZShyYW5kb20oMCxwaWVjZXMubGVuZ3RoLTEpLDEpWzBdO3JldHVybnt0eXBlOnR5cGUsZGlyOkRJUi5VUCx4Ok1hdGgucm91bmQocmFuZG9tKDAsbngtdHlwZS5zaXplKSkseTowfTt9O2Z1bmN0aW9uIHJ1bigpe2FkZEV2ZW50cygpO3ZhciBsYXN0PW5vdz10aW1lc3RhbXAoKTtmdW5jdGlvbiBmcmFtZSgpe25vdz10aW1lc3RhbXAoKTt1cGRhdGUoTWF0aC5taW4oMSwobm93LWxhc3QpLzEwMDAuMCkpO2RyYXcoKTtsYXN0PW5vdztyZXF1ZXN0QW5pbWF0aW9uRnJhbWUoZnJhbWUsY2FudmFzKTt9CnJlc2l6ZSgpO3Jlc2V0KCk7ZnJhbWUoKTt9O2Z1bmN0aW9uIGFkZEV2ZW50cygpe2RvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ2tleWRvd24nLGtleWRvd24sZmFsc2UpO3dpbmRvdy5hZGRFdmVudExpc3RlbmVyKCdyZXNpemUnLHJlc2l6ZSxmYWxzZSk7fTtmdW5jdGlvbiByZXNpemUoZXZlbnQpe2NhbnZhcy53aWR0aD1jYW52YXMuY2xpZW50V2lkdGg7Y2FudmFzLmhlaWdodD1jYW52YXMuY2xpZW50SGVpZ2h0O3VjYW52YXMud2lkdGg9dWNhbnZhcy5jbGllbnRXaWR0aDt1Y2FudmFzLmhlaWdodD11Y2FudmFzLmNsaWVudEhlaWdodDtkeD1jYW52YXMud2lkdGgvbng7ZHk9Y2FudmFzLmhlaWdodC9ueTtpbnZhbGlkYXRlKCk7aW52YWxpZGF0ZU5leHQoKTt9O2Z1bmN0aW9uIGtleWRvd24oZXYpe3ZhciBoYW5kbGVkPWZhbHNlO2lmKHBsYXlpbmcpe3N3aXRjaChldi5rZXlDb2RlKXtjYXNlIEtFWS5MRUZUOmFjdGlvbnMucHVzaChESVIuTEVGVCk7aGFuZGxlZD10cnVlO2JyZWFrO2Nhc2UgS0VZLlJJR0hUOmFjdGlvbnMucHVzaChESVIuUklHSFQpO2hhbmRsZWQ9dHJ1ZTticmVhaztjYXNlIEtFWS5VUDphY3Rpb25zLnB1c2goRElSLlVQKTtoYW5kbGVkPXRydWU7YnJlYWs7Y2FzZSBLRVkuRE9XTjphY3Rpb25zLnB1c2goRElSLkRPV04pO2hhbmRsZWQ9dHJ1ZTticmVhaztjYXNlIEtFWS5FU0M6bG9zZSgpO2hhbmRsZWQ9dHJ1ZTticmVhazt9fQplbHNlIGlmKGV2LmtleUNvZGU9PUtFWS5TUEFDRSl7cGxheSgpO2hhbmRsZWQ9dHJ1ZTt9CmlmKGhhbmRsZWQpCmV2LnByZXZlbnREZWZhdWx0KCk7fTtmdW5jdGlvbiBwbGF5KCl7aGlkZSgnc3RhcnQnKTtyZXNldCgpO3BsYXlpbmc9dHJ1ZTt9O2Z1bmN0aW9uIGxvc2UoKXtzaG93KCdzdGFydCcpO3NldFZpc3VhbFNjb3JlKCk7cGxheWluZz1mYWxzZTt9O2Z1bmN0aW9uIHNldFZpc3VhbFNjb3JlKG4pe3ZzY29yZT1ufHxzY29yZTtpbnZhbGlkYXRlU2NvcmUoKTt9O2Z1bmN0aW9uIHNldFNjb3JlKG4pe3Njb3JlPW47c2V0VmlzdWFsU2NvcmUobik7fTtmdW5jdGlvbiBhZGRTY29yZShuKXtzY29yZT1zY29yZStuO307ZnVuY3Rpb24gY2xlYXJTY29yZSgpe3NldFNjb3JlKDApO307ZnVuY3Rpb24gY2xlYXJSb3dzKCl7c2V0Um93cygwKTt9O2Z1bmN0aW9uIHNldFJvd3Mobil7cm93cz1uO3N0ZXA9TWF0aC5tYXgoc3BlZWQubWluLHNwZWVkLnN0YXJ0LShzcGVlZC5kZWNyZW1lbnQqcm93cykpO2ludmFsaWRhdGVSb3dzKCk7fTtmdW5jdGlvbiBhZGRSb3dzKG4pe3NldFJvd3Mocm93cytuKTt9O2Z1bmN0aW9uIGdldEJsb2NrKHgseSl7cmV0dXJuKGJsb2NrcyYmYmxvY2tzW3hdP2Jsb2Nrc1t4XVt5XTpudWxsKTt9O2Z1bmN0aW9uIHNldEJsb2NrKHgseSx0eXBlKXtibG9ja3NbeF09YmxvY2tzW3hdfHxbXTtibG9ja3NbeF1beV09dHlwZTtpbnZhbGlkYXRlKCk7fTtmdW5jdGlvbiBjbGVhckJsb2Nrcygpe2Jsb2Nrcz1bXTtpbnZhbGlkYXRlKCk7fQpmdW5jdGlvbiBjbGVhckFjdGlvbnMoKXthY3Rpb25zPVtdO307ZnVuY3Rpb24gc2V0Q3VycmVudFBpZWNlKHBpZWNlKXtjdXJyZW50PXBpZWNlfHxyYW5kb21QaWVjZSgpO2ludmFsaWRhdGUoKTt9O2Z1bmN0aW9uIHNldE5leHRQaWVjZShwaWVjZSl7bmV4dD1waWVjZXx8cmFuZG9tUGllY2UoKTtpbnZhbGlkYXRlTmV4dCgpO307ZnVuY3Rpb24gcmVzZXQoKXtkdD0wO2NsZWFyQWN0aW9ucygpO2NsZWFyQmxvY2tzKCk7Y2xlYXJSb3dzKCk7Y2xlYXJTY29yZSgpO3NldEN1cnJlbnRQaWVjZShuZXh0KTtzZXROZXh0UGllY2UoKTt9O2Z1bmN0aW9uIHVwZGF0ZShpZHQpe2lmKHBsYXlpbmcpe2lmKHZzY29yZTxzY29yZSkKc2V0VmlzdWFsU2NvcmUodnNjb3JlKzEpO2hhbmRsZShhY3Rpb25zLnNoaWZ0KCkpO2R0PWR0K2lkdDtpZihkdD5zdGVwKXtkdD1kdC1zdGVwO2Ryb3AoKTt9fX07ZnVuY3Rpb24gaGFuZGxlKGFjdGlvbil7c3dpdGNoKGFjdGlvbil7Y2FzZSBESVIuTEVGVDptb3ZlKERJUi5MRUZUKTticmVhaztjYXNlIERJUi5SSUdIVDptb3ZlKERJUi5SSUdIVCk7YnJlYWs7Y2FzZSBESVIuVVA6cm90YXRlKCk7YnJlYWs7Y2FzZSBESVIuRE9XTjpkcm9wKCk7YnJlYWs7fX07ZnVuY3Rpb24gbW92ZShkaXIpe3ZhciB4PWN1cnJlbnQueCx5PWN1cnJlbnQueTtzd2l0Y2goZGlyKXtjYXNlIERJUi5SSUdIVDp4PXgrMTticmVhaztjYXNlIERJUi5MRUZUOng9eC0xO2JyZWFrO2Nhc2UgRElSLkRPV046eT15KzE7YnJlYWs7fQppZih1bm9jY3VwaWVkKGN1cnJlbnQudHlwZSx4LHksY3VycmVudC5kaXIpKXtjdXJyZW50Lng9eDtjdXJyZW50Lnk9eTtpbnZhbGlkYXRlKCk7cmV0dXJuIHRydWU7fQplbHNle3JldHVybiBmYWxzZTt9fTtmdW5jdGlvbiByb3RhdGUoZGlyKXt2YXIgbmV3ZGlyPShjdXJyZW50LmRpcj09RElSLk1BWD9ESVIuTUlOOmN1cnJlbnQuZGlyKzEpO2lmKHVub2NjdXBpZWQoY3VycmVudC50eXBlLGN1cnJlbnQueCxjdXJyZW50LnksbmV3ZGlyKSl7Y3VycmVudC5kaXI9bmV3ZGlyO2ludmFsaWRhdGUoKTt9fTtmdW5jdGlvbiBkcm9wKCl7aWYoIW1vdmUoRElSLkRPV04pKXthZGRTY29yZSgxMCk7ZHJvcFBpZWNlKCk7cmVtb3ZlTGluZXMoKTtzZXRDdXJyZW50UGllY2UobmV4dCk7c2V0TmV4dFBpZWNlKHJhbmRvbVBpZWNlKCkpO2NsZWFyQWN0aW9ucygpO2lmKG9jY3VwaWVkKGN1cnJlbnQudHlwZSxjdXJyZW50LngsY3VycmVudC55LGN1cnJlbnQuZGlyKSl7bG9zZSgpO319fTtmdW5jdGlvbiBkcm9wUGllY2UoKXtlYWNoYmxvY2soY3VycmVudC50eXBlLGN1cnJlbnQueCxjdXJyZW50LnksY3VycmVudC5kaXIsZnVuY3Rpb24oeCx5KXtzZXRCbG9jayh4LHksY3VycmVudC50eXBlKTt9KTt9O2Z1bmN0aW9uIHJlbW92ZUxpbmVzKCl7dmFyIHgseSxjb21wbGV0ZSxuPTA7Zm9yKHk9bnk7eT4wOy0teSl7Y29tcGxldGU9dHJ1ZTtmb3IoeD0wO3g8bng7Kyt4KXtpZighZ2V0QmxvY2soeCx5KSkKY29tcGxldGU9ZmFsc2U7fQppZihjb21wbGV0ZSl7cmVtb3ZlTGluZSh5KTt5PXkrMTtuKys7fX0KaWYobj4wKXthZGRSb3dzKG4pO2FkZFNjb3JlKDEwMCpNYXRoLnBvdygyLG4tMSkpO319O2Z1bmN0aW9uIHJlbW92ZUxpbmUobil7dmFyIHgseTtmb3IoeT1uO3k+PTA7LS15KXtmb3IoeD0wO3g8bng7Kyt4KQpzZXRCbG9jayh4LHksKHk9PTApP251bGw6Z2V0QmxvY2soeCx5LTEpKTt9fTt2YXIgaW52YWxpZD17fTtmdW5jdGlvbiBpbnZhbGlkYXRlKCl7aW52YWxpZC5jb3VydD10cnVlO30KZnVuY3Rpb24gaW52YWxpZGF0ZU5leHQoKXtpbnZhbGlkLm5leHQ9dHJ1ZTt9CmZ1bmN0aW9uIGludmFsaWRhdGVTY29yZSgpe2ludmFsaWQuc2NvcmU9dHJ1ZTt9CmZ1bmN0aW9uIGludmFsaWRhdGVSb3dzKCl7aW52YWxpZC5yb3dzPXRydWU7fQpmdW5jdGlvbiBkcmF3KCl7Y3R4LnNhdmUoKTtjdHgubGluZVdpZHRoPTE7Y3R4LnRyYW5zbGF0ZSgwLjUsMC41KTtkcmF3Q291cnQoKTtkcmF3TmV4dCgpO2RyYXdTY29yZSgpO2RyYXdSb3dzKCk7Y3R4LnJlc3RvcmUoKTt9O2Z1bmN0aW9uIGRyYXdDb3VydCgpe2lmKGludmFsaWQuY291cnQpe2N0eC5jbGVhclJlY3QoMCwwLGNhbnZhcy53aWR0aCxjYW52YXMuaGVpZ2h0KTtpZihwbGF5aW5nKQpkcmF3UGllY2UoY3R4LGN1cnJlbnQudHlwZSxjdXJyZW50LngsY3VycmVudC55LGN1cnJlbnQuZGlyKTt2YXIgeCx5LGJsb2NrO2Zvcih5PTA7eTxueTt5Kyspe2Zvcih4PTA7eDxueDt4Kyspe2lmKGJsb2NrPWdldEJsb2NrKHgseSkpCmRyYXdCbG9jayhjdHgseCx5LGJsb2NrLmNvbG9yKTt9fQpjdHguc3Ryb2tlUmVjdCgwLDAsbngqZHgtMSxueSpkeS0xKTtpbnZhbGlkLmNvdXJ0PWZhbHNlO319O2Z1bmN0aW9uIGRyYXdOZXh0KCl7aWYoaW52YWxpZC5uZXh0KXt2YXIgcGFkZGluZz0obnUtbmV4dC50eXBlLnNpemUpLzI7dWN0eC5zYXZlKCk7dWN0eC50cmFuc2xhdGUoMC41LDAuNSk7dWN0eC5jbGVhclJlY3QoMCwwLG51KmR4LG51KmR5KTtkcmF3UGllY2UodWN0eCxuZXh0LnR5cGUscGFkZGluZyxwYWRkaW5nLG5leHQuZGlyKTt1Y3R4LnN0cm9rZVN0eWxlPSdibGFjayc7dWN0eC5zdHJva2VSZWN0KDAsMCxudSpkeC0xLG51KmR5LTEpO3VjdHgucmVzdG9yZSgpO2ludmFsaWQubmV4dD1mYWxzZTt9fTtmdW5jdGlvbiBkcmF3U2NvcmUoKXtpZihpbnZhbGlkLnNjb3JlKXtodG1sKCdzY29yZScsKCIwMDAwMCIrTWF0aC5mbG9vcih2c2NvcmUpKS5zbGljZSgtNSkpO2ludmFsaWQuc2NvcmU9ZmFsc2U7fX07ZnVuY3Rpb24gZHJhd1Jvd3MoKXtpZihpbnZhbGlkLnJvd3Mpe2h0bWwoJ3Jvd3MnLHJvd3MpO2ludmFsaWQucm93cz1mYWxzZTt9fTtmdW5jdGlvbiBkcmF3UGllY2UoY3R4LHR5cGUseCx5LGRpcil7ZWFjaGJsb2NrKHR5cGUseCx5LGRpcixmdW5jdGlvbih4LHkpe2RyYXdCbG9jayhjdHgseCx5LHR5cGUuY29sb3IpO30pO307ZnVuY3Rpb24gZHJhd0Jsb2NrKGN0eCx4LHksY29sb3Ipe2N0eC5maWxsU3R5bGU9Y29sb3I7Y3R4LmZpbGxSZWN0KHgqZHgseSpkeSxkeCxkeSk7Y3R4LnN0cm9rZVJlY3QoeCpkeCx5KmR5LGR4LGR5KX07cnVuKCk7Cjwvc2NyaXB0Pgo8L2JvZHk+IAo8L2h0bWw+');
?>
