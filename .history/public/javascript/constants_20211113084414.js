export class Constants {
  host = "http://localhost/TP&SHOPPET";

  baseUrl(string, id = "") {
    let array = string.split("/");
    let module = array[0];
    let action = array[1];
    return this.host + "?module=" + module + "&action=" + action + "&id=" + id;
  }
}
