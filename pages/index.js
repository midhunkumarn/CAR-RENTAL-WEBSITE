function handleSubmit () {
    const name = document.getElementById('name').value;
    const phone = document.getElementById('phone').value;
    const text = document.getElementById('text').value;
    const license = document.getElementById('license').value;
    const days = document.getElementById('days').value;
    const hours = document.getElementById('hours').value;
    const fdate = document.getElementById('fdate').value;
    const tdate = document.getElementById('tdate').value;

    localStorage.setItem("NAME :", name);
    localStorage.setItem("PHONE NUMABER :", phone);
    localStorage.setItem("ADDRESS :", text);
    localStorage.setItem("LICENSE :", license);
    localStorage.setItem("NUMBER OF DAYS :", days);
    localStorage.setItem("HOURS :", hours);
    localStorage.setItem("FROM DATE:", fdate);
    localStorage.setItem("TO DATE :", tdate);

    return;
}