<ul class="collapsible popout" data-collapsible="accordion">
    {penghuni}
    <li>
        <div class="collapsible-header"><i class="material-icons">filter_drama</i>Profil</div>
        <div class="collapsible-body">
            <div class="row">
                <div class="col s12">
                    <ul class="collection">
                        <li class="collection-item avatar">
                            <i class="material-icons circle blue">perm_contact_calendar</i>
                            <span class="title">Nama</span>
                            <p>
                                <table>
                                <thead>
                                  <tr>
                                      <th data-field="id">Name</th>
                                      <th data-field="name">Item Name</th>
                                      <th data-field="price">Item Price</th>
                                  </tr>
                                </thead>

                                <tbody>
                                  <tr>
                                    <td>Alvin</td>
                                    <td>Eclair</td>
                                    <td>$0.87</td>
                                  </tr>
                                  <tr>
                                    <td>Alan</td>
                                    <td>Jellybean</td>
                                    <td>$3.76</td>
                                  </tr>
                                  <tr>
                                    <td>Jonathan</td>
                                    <td>Lollipop</td>
                                    <td>$7.00</td>
                                  </tr>
                                </tbody>
                              </table>
                            </p>
                        </li>
                        <li class="collection-item avatar">
                            <i class="material-icons circle red">room</i>
                            <span class="title">Alamat</span>
                            <p>
                                <p>{alamat}</p>
                            </p>
                        </li>
                        <li class="collection-item avatar">
                            <i class="material-icons circle green">call</i>
                            <span class="title">Telepon</span>
                            <p>
                                <p>{telepon}</p>
                            </p>
                        </li>
                        <li class="collection-item avatar">
                            <i class="material-icons circle blue">email</i>
                            <span class="title">Email</span>
                            <p>
                                <b>
                                    <a href="mailto:{email}">{email}</a>
                                </b>
                            </p>
                            <a href="mailto:{email}" class="secondary-content">
                                <i class="material-icons">markunread_mailbox</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </li>
    {/penghuni}
</ul>