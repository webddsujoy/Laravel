let datatables = {
    kt_roles_table: null,
};

function editData(el, url) {
    let id = el.closest(".datatablerow-id").attr("data-id");
    window.location.href = url + "/edit/" + id;
}

function deleteData(el, url) {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            let id = el.closest(".datatablerow-id").attr("data-id");
            let tableid = el.closest("table").attr("id");
            fetch(url + id, {
                method: "DELETE",
                headers: {
                    "Content-type": "application/json; charset=UTF-8",
                    Authorization:
                        "Bearer " + localStorage.getItem("authToken"),
                },
            })
                .then((res) => res.json())
                .then(function (data) {
                    if (data.success == true) {
                        toastr.success(data.message);
                        datatables[tableid].clear().draw();
                    } else {
                        toastr.error(err.message);
                    }
                })
                .catch((err) => {
                    hideLoader();
                    toastr.error(err.message);
                });
        }
    });
}

function generateTable(tableid, searchid, url, columns, actions) {
    let data = {
        draw: 0,
        recordsTotal: 0,
        recordsFiltered: 0,
        data: [],
    };
    datatables[tableid] = $("#" + tableid).DataTable({
        serverSide: true,
        processing: true,
        // dom:actions,
        ajax: {
            url: url,
            headers: {
                "Content-type": "application/json; charset=UTF-8",
                Authorization: "Bearer " + localStorage.getItem("authToken"),
            },
            data: (d) => {
                data = {
                    ...data,
                    draw: d.draw,
                };
                return {
                    per_page: d.length,
                    page: d.start / d.length + 1,
                    search: $("#" + searchid).val(),
                };
            },
            dataFilter: function (json) {
                json = JSON.parse(json);
                let tabData = [];
                json.data.data.map((serData) => {
                    let rowData = [];
                    columns.map((col) => {
                        /*  if (col == "roles") {
                            rowData.push(serData.roles[0].name);
                        } else if (col == "auditlog_user") {
                            if (typeof serData.user.email != "undefined") {
                                rowData.push(serData.user.email);
                            } else {
                                rowData.push(serData.user_id);
                            }
                        } else if (col == "auditlog_data") {
                            let dataHtml = "";
                            $.each(serData.json_data, function (key, value) {
                                if (checkJson(value)) {
                                    let innerJson = JSON.parse(value);
                                    console.log(innerJson);
                                    $.each(innerJson, function (key1, val1) {
                                        dataHtml += `${key1} : ${val1}<br>`;
                                    });
                                } else {
                                    dataHtml += `${key} : ${value}<br>`;
                                }
                            });
                            rowData.push(dataHtml);
                        } else if (col == "external_reference") {
                            let dataHtml = "";
                            $.each(
                                JSON.parse(serData.external_reference),
                                function (key, value) {
                                    if (checkJson(value)) {
                                        let innerJson = JSON.parse(value);
                                        console.log(innerJson);
                                        $.each(
                                            innerJson,
                                            function (key1, val1) {
                                                dataHtml += `${key1} : ${val1}<br>`;
                                            }
                                        );
                                    } else {
                                        if (value.length >= 1) {
                                            $.each(
                                                value,
                                                function (key2, value2) {
                                                    dataHtml += `${key} : ${value2}<br>`;
                                                }
                                            );
                                        } else {
                                            dataHtml += `${key} : ${value}<br>`;
                                        }
                                    }
                                }
                            );
                            rowData.push(dataHtml);
                        } else { */
                        rowData.push(serData[col]);
                        // }
                    });
                    rowData.push(
                        '<div class="datatablerow-id" data-id="' +
                            serData.id +
                            '">' +
                            actions +
                            "</div>"
                    );
                    tabData.push(rowData);
                });
                return JSON.stringify({
                    ...data,
                    recordsTotal: json.data.total,
                    recordsFiltered: json.data.total,
                    data: tabData,
                });
            },
        },
    });

    $("#" + searchid).change(function () {
        datatables[tableid].clear().draw();
    });
}
