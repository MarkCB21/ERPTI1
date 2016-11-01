function addRow() {
			var table = document.getElementById("tableID");

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			var cell1 = row.insertCell(0);

			var element1 = document.createElement("input");
			element1.style.width= "50px";
			element1.type = "checkbox";
			element1.name="chkbox"
			cell1.appendChild(element1);

			var cell2 = row.insertCell(1);
			var element2 = document.createElement("input");
			element2.style.width= "100px";
			element2.type = "number";
			element2.name = "cod[]";
			cell2.appendChild(element2);

			var cell3 = row.insertCell(2);
			var element3 = document.createElement("input");
			element3.style.width= "250px";
			element3.type = "text";
			element3.name = "nombre[]";
			cell3.appendChild(element3);


			var cell4 = row.insertCell(3);
			var element4 = document.createElement("input");
			element4.style.width= "100px";
			element4.type = "number";
			element4.name = "cant[]";
			cell4.appendChild(element4);
			

			var cell5 = row.insertCell(4);
			var element5 = document.createElement("input");
			element5.style.width= "100px";
			element5.type = "number";
			element5.name = "punit[]";
			cell5.appendChild(element5);

			var cell6 = row.insertCell(5);
			var element6 = document.createElement("input");
			element6.style.width= "100px";
			element6.type = "number";
			element6.name = "total[]";
			cell6.appendChild(element6);		
		}
		function deleteRow() {
			try {
			var table = document.getElementById("tableID");
			var rowCount = table.rows.length;

			for(var i=0; i<rowCount; i++) {
				var row = table.rows[i];
				var chkbox = row.cells[0].childNodes[0];
				if(null != chkbox && true == chkbox.checked) {
					table.deleteRow(i);
					rowCount--;
					i--;
				}
			}
			}catch(e) {
				alert(e);
			}
		}