@extends('layout_admin.default')


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="border-radius:15px">
                    <div class="card-body">
                        <div class="border-bottom d-flex   ">
                            <img src="https://img.celebrities.id/okz/600/46YC3M/master_48t3I3KE4S_554_ryujin_itzy.jpg" alt="" class="rounded-circle" style="width: 40px; height:40px;">
                            <div style="line-height: 10px; margin-left: 25px;">
                              <p class="mb-1 mt-2 text-bold" style="">Ini HRD :V <span style="margin-left:132px; font-size:10px; color:grey; font-family:inter;">13:22</span></p>
                              <p class="mt-3" style="color:grey;">Agan HRD mengetik... <span class="whatsapp-message">2</span></p>
                            </div>
                        </div><br>
                        <div class="border-bottom d-flex   ">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFAucF3L4cv0YLXfmojini5ZjLOwIDKY1GZQ&usqp=CAU" alt="" class="rounded-circle" style="width: 40px; height:40px;">
                            <div style="line-height: 10px; margin-left: 25px;">
                              <p class="mb-1 mt-2 text-bold" style="">Ini HRD :V <span style="margin-left:132px; font-size:10px; color:grey; font-family:inter;">13:22</span></p>
                              <p class="mt-3" style="color:grey;">Agan HRD mengetik... <span class="whatsapp-message">2</span></p>
                            </div>
                        </div><br>
                        <div class="border-bottom d-flex   ">
                            <img src="data:image/jpeg;base64,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" alt="" class="rounded-circle" style="width: 40px; height:40px;">
                            <div style="line-height: 10px; margin-left: 25px;">
                              <p class="mb-1 mt-2 text-bold" style="">Ini HRD :V <span style="margin-left:132px; font-size:10px; color:grey; font-family:inter;">13:22</span></p>
                              <p class="mt-3" style="color:grey;">Agan HRD mengetik... <span class="whatsapp-message">2</span></p>
                            </div>
                        </div><br>
                        <div class="border-bottom d-flex   ">
                            <img src="data:image/jpeg;base64,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" alt="" class="rounded-circle" style="width: 40px; height:40px;">
                            <div style="line-height: 10px; margin-left: 25px;">
                              <p class="mb-1 mt-2 text-bold" style="">Ini HRD :V <span style="margin-left:132px; font-size:10px; color:grey; font-family:inter;">13:22</span></p>
                              <p class="mt-3" style="color:grey;">Agan HRD mengetik... <span class="whatsapp-message">2</span></p>
                            </div>
                        </div><br>
                        <div class="border-bottom d-flex   ">
                            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVFRgWFhYYGBgYHBocHBgYGBgYGBocGBwcGhgYHBocIS4lHB4rIRkcJjgmKy8xNTU1GiQ7QDszPy40NTEBDAwMEA8QHxISGjQhISQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0MTQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0ND80NP/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAFAgMEBgcAAQj/xABAEAABAwEEBgcFBwQCAgMAAAABAAIRAwQSITEFQVFhcYEGIjKRobHBE2Jy0fAkNEJSkrLhFCMzgsLxB9IVJbP/xAAZAQADAQEBAAAAAAAAAAAAAAABAgMEAAX/xAAkEQACAgICAgIDAQEAAAAAAAAAAQIRITEDEjJBIlEEE3FhQv/aAAwDAQACEQMRAD8AvLKiUVEukJbXqVGNkphTiiB5S2OKIR17U2AnFwagcKDl6HJDl4MEUgMfgLxwTHtk62ojR1ibq9cFxK4owXyBJ4I1ULmpdQLxgW5GRiXhMPCkuTDwidHZ1nGKNWVCKIxReyJJaNUCdOCg1q4BUxxwVa0nUIfgs7WC0pOIUFpCcbWCAioQubajtU6EfI0VT/yFUmuwbG+ZVTpdocUb6YVb1f8A1HmUDodocVSKpGiLtWHWriuC4qpwD05i9g3jzW22B4uN4LENNf5GcR5hazZLXDG8FOeiUpdZB++uQX+tK5ToX9xLuBNvYEt7sFHc4paAeXYS2vCjuqYpJ2oI6iYaoT9J8oDXrkKTYrXKNUHqwu8Jly5tVelyFgGWskqS1sJASwU1go4heyvYUHSukG0KZe7HU1utztQ8EYvJzi3hHtvtbKTS+o9rGjW4+AGZO4KsW7pmxuFNpOwvNwcm5kcYVY0vpF9R5fVdJ/C38LBsaPM5lCH4tJAAG05lUfJJ6KQ/GjHMsstdLpu+esxsT7o4YXkdfp8Gn7QNkCJxAw2+HisitFRoPak7kUsGli2k6mDg4EQ7HeCD6fyuuX2UUOPVGt6N0oyp2TjG4cs8VYrIsFsulnNBeCGnCM/52ZLS+hPSn20Mfg/UcceJ7kVN6Z0uKKzEvbskDtlGXo4ckMrt6ySTwTlkGvpbFF9gZlFzTTb6SmpE2rMt6UfeHcB6oZZx1hxRfpcyLS7g31QmzdocVaOjTFUg2ucuXFUGAOlf81Me83zC0qznqjgs10gJtFIe839wWm0mdUcErMvKsnq5ddXJSVBqmME4aYK8AS2FSssD7RZccE2xmpFakQo4agcmD6tiDs0/ZrKG5KSXQvWvXHOQk016Gb04XJAeuoAmSnWFIupLzCYUfc5Zd0v0/feYybLWDcO048T4cFdekltNOg7a/qD/AGBvHuB71jNvtF57jOAMDdGHmD3pfZq4lS7Hla1E4kyVJsNjq1zDG3o1nst3T6Yr3o7od1pfsY3tHyaFqejtHMpsDWCABAC6U+uFs0Q43LL0USh0Iecaj+TR81KZ0LYBmef/AEr/AOyTb2KfeT9l1xRXoyTSuiH2d0xLdqNdDK8vgBwLdmrWD4Zd2SudusjXtIIzVAtdkdZbQLputdIacQ2cDBOyQFWErwyPJx9crRt+iLcKtPPrNwPoeB9Em0HrKrdB9K33QeqXgtLfeZjPCA7wVnrnrJpO0YuX4s4OXhXgSgpUTUjK+mZ+0u+Fvqg9k7YRbpkftT+DfJCbJ22q8PFGhaDa4rl45UGAdr+80vib+4LUqXZHBZe5l62UhtezzC191lF0cEkpUZ5xbdkKFy99iVyWyVBZjpSlApVipjRKkOc90rmMlcWJdOoAijht9IpAolT7wSFzDRFLEgCFMc1NupyELA0RzVCdAkKM+zGU694Y0kmABJOwDWiCij9OreBUDAcKbC52y87GP0gd6ygPLyABJJy3lWjpJpEv9o851C7uJIAw3YckJ6KWebTTDh+IYEbMUVhNmzrpGmdHdHts1BgdgYlx944kenJEnaUY3Nr42hhPknKhDReiY3T3ILpLpC+my+KRLSbsTDpgnsgGBhmYUF8mb6UY/wCFjslvpvHVJ4EQvKpAxJwQvQ1qFVofcLDhIOqQDE681Ot7mjA5QSZiIGaYH8IVXStKYkngEP6Q2Jlpszywy5oLhtBbjEbwutWm6dJ7adx158XQGYkOynYi+j6jKjLzAOthlHIhUiqJzprZn3RjTDqTrxJhlwgjMkOAunaIJELZXvDiCMiARwK+fNIOLHOYOzfdhhm3DuiFr3QbSf8AUWNhJJfT6jpMnqxBJ3ggp5LF/Zg5Mr+FmC6U2Hr0qZnMq6Wn7S//AF8kNsfbCI9Kj9pfy8gh9i7YVo6NUdBpeOXqSVQYE0B9vo/G3wxW0vIujgsXsv3+j8Q8lsRMjko8voi3TGbq5e+yK5JZ1oV7ENxXCuEt4kKI6iZlLkTqPutG1IDpTL6RSrMyM03o6iWxxCV7Rc4pskJWjkOtqpxtRR2AJd5ckFkjBVbpzb7lBzWnF8N8frx3Kxl+BKz7p3aCXMaZA7W7Ic83HvC5j8SuRQLc8ue1o/M0DwAHeSldGZFpYffg8ZIUS1OIIdrHW8bysXRbR5e19UiAHhwP+2MaiPknliJphmSNMpQQEv8AomnUFHshwCItfgoRRtZHdSDSAEi10+sDslJtLng9RoJw7RIEa8taYr2h5MFmBBxnEO/CAIyzxlNFCsbr6NpuIcWCRkYEj6k95T7GCmxzgIDQXfpEp8nBQdNvizVMYvC7O52B8CU8RJ6Mpt5Fx94C/LXA68XQ7HhPcrR/4qtxFSpSJwc0OA3gwSOILe5VDSrw+pDDIEAHaRnCKdCKhZbacayWngdvcE8k+pllTdG1hiUckoCAkXkhjayZR0oP2mpxHkFAsB64U7pR95qcR+0KDYO2FaOkaEGnLwrnLw5JxgXY/v8AS+L0K2KiclkGi8bfS4/8StfZkpchln5Dy5IvLlIA0x4TocCh7ClXyEdDk8gJtzFEbWKk06mCDeTqI1aqQkMrypFdkpplmxR2HA616Q+U42gU4KWCZHYIwqZDaR4Y+io/Tlv9xpzAaduUQB4BXt1GD9cPVU7p7Q6jX8RxwMeqRvJXiqzN7e3PcPkExT0tVpO6j3BsCWg9VwmSCDgJ2py2O7X1qQt2Kssod/F4Nx0Ram1KbHgyCAeREhEr8CVnPQm2ObQGJLWuLT7smRygq92W1BwzWdrq6N0X2imQ7Rpt0kMpuw/MLp7nQmaenMQHsc0HCQ04cUZfZWuzTIsLWmQEEnZoc+PrVZFtfIlVX/yBpj2LKVMAOLy4ubJHVaIzGIxd4FHdJaTZQY573Q1o5nYANZKx7TGlHWmu6s7CcGt/K1vZb6neSrQR5/NIRRN14jUEf0PT+0sI/MDszKrVB2Ks3RvG0MxydOU5CU8nhkIrJuAMifrFMlicpDAcB5L16kmZJbMh6S/eavxDyCh2DthS+kv3mr8XoFFsB64Vo6RpWgw5cVxXjk4wP0UP/sKfE/tK19gwWQ6H+/s4n9pWvA4KfIZp+R7C5JvLxSoFkOmYCWTK8kFKMBM0MmeBqepslNuywXtGrGaHUNj5YltYmvbyUsVFzVAYtz4SfbJL3Sm3jBC2AdvSgPTOgHWZ51shwjccu4ozQeoenKV6hUbMSxw3CQYPL5pGVg6aMItTsXb1Da2QpVoxJPmo7cDCtHRWWy19AK0VH0zk8A824eR8FdX2R7DLMtizroxUuWlh2mO8ELXmtlo4KU1k2cL+IPpaWIwc0ym7RpYkdUKZWoAjEKCbKJySoaRSOnNZzqbJObx5FUxg8le+n7BcYAMnF3d1R+7wVHYFoh4mLm8hygMOCtnROnNdvCPT64qr2Uw8a920K5dHqJp1WuM3cHNcCLrhIOB4Bvelm8HcSybBTyHBdVySbO+WtO4fIpNcqbMklkyLpN95q/F6BRNHnrhP9ID9pq/GVG0eeuFohpF0HSUl69SHHBOMQtCH7ezif2la7eBWP6F+/M4n9q126pz2ZZ+QpcuurxToUgMYQYKfuShdgtl+kx8yYuuPvN/iDzUplpJVJRpjx+UUycwDJLdQBTDHEqQ2pAxQQaB9UFiSLVKk2m0ggiEMY07EzihlkmG0qRTqXgglS2Mb7x2ZDvQy3OZVMvYx2wkAxuE5JHSKR4my4Fl3E4BV3TfSUMY8MEEDtOzk4AAasYzUKx6Qc2WHsgSzbqvN5SCOexVfpLab4v6tW/PrZa0jyVjx1llVqGB9clGYJMpyq7WvKTcAfrenSFeWTbLVuPY/Y5p8pWzaOrB7GuBwIBG8EYLDnmVpvQLSF+jcJ6zMP9dR80s17L8MtotdRqjubAJUtolRNIYBTLooPTA3mvOoQByBcqOGwVoHSGn1H8/BpVDqMyO0eStx6MnMvke0XQRMxuzG8b1omhB7WncJBcQS184PJkFowwObowM3t052FZuiduDXezeYDouk4hrtU+GWK6QIGw6KtF9jXayATuJHWH6r3gpz2YKoWLSfsKhvwxjj1wYAD8Ou0/iaRB5YTBCt5eCN0avBTeCHJGpWYx0mEWqqPe9Aomjj1wpfSl82qr8XkAFC0aeuFeOkMHkly9SXpxiDoM/b2cT+0rXwVjmiPvzPi9Ctae+FPkM0/IlXxsXii/1Dtq5SBSK10UqB1+ifxdZvxD+MEcpsjA5jUqVoy0mm9rxqVzZaRWbfb2h2hjMD8S18kbVohwclPq/ZLa8BNV6yYBXj2qVUa6GqlYASf+0Mtdqc8wMG6h80u3vxu7MVFGSnKT0jTxwSyeBiUKf14JQdguLlOi1gnShLWy3PIRsd1Zw2AnuVS0zXLnhgPVZhxIwJ9OSsWnapDTxHniPLuVTa2cTxlOkJJkK0DUluENj6z+vBc5sv+tacLfOeQwTiUNFue5H+i1tNOs0jYQduAmEHazPe094xHipDCWFjtwPMZeQQeUGOGbJZqwcA4ZGDsXtpZIk6lXOjemGlgkwInGcNRx2TvRevb2kGJPAGO9S/VJ6Rp/ZFeytaUp32u3zzwI9VQrRSgAbLw7itFqhVLTlmuvMZOgjcYh3mni6ITV5AAUiljx80y3AxyS2YH6lUaJIuuiukDH0/Y2nrNi61/wCJo/KSMSNcz8jbdHaQdRaGTfpkdR0lwAAi7eAkcDJbvGWRVHa1P0bpt9J0ElzHCHMPYdhAw3bRiNRSyiNdhzpHo5xqPrDFjyDN0kNJ/C+OxkeseqduaE2BhD4OBGEK3WDSzbgfTJLXuAcx5xaSbtwkQHB2pw1xIBwULSuj2ivfpCGO60RAE5tA/CQQcMsAAdSeLrAjQ2Ul5XpKQ8pzgdod0W9nxf8AErW3twWSaGxt9Me9/wAStjuYJJoyz8iBcK5TboXKdAszBhRTQ9rLHh0w3G9OV3X8uaA1rU1jQTmcgMymKDn1DLjDcw3IcStpj62ak66QC3JwBHBwkeBTFR4AJOQUbRDiaFOceqRya5zR4BRtL1rou7cTw1ePkoSwelxfJIgueXOJ24pcJqi3BOzgoNm1HgcvCU2XeiWBguOK10if2RtMepPcgki7OGIJwjVEfW9E+k03mYxg7whB7NjnlAHIY+idaJyeSOxsH65p8Ny4FJmCNv8A2lz5fwgcM3tfHxwRL2d6zNf+R7hyMQfrYhxGe71R/QNG/Rq0zr84wPIgLjhvQdoLXAbHT+oFpGzHDuVwNYuGXMmccBAGpvzVK0Q3rlpES0iDIMhwMccD9BWixVi7PNuB55FaoyrjZOrkh55QTTbLwn8v0UccoFtZLXcPT67liRoZRLQz1TgN4Dbr9CnLTTz4wmmfXP6ComRayesySXU5Ed3FdMH64px4wDhqhMmBoe0PpF9F8gm6eq9upzTg4HfGtXW13XsZUZMziQRiHzJdqJkGdpc7DFUZrAXHDDONw1KwdGbb26DicZLTmMCCQduU9+1Kwr6CNVwOOW3ZO7cmXFOVs9ny1cf4TL1VCsHaJdFvpn3/ADBWyvdksX0aYt1P4x5LaIkclPkZmmrYm8uTdwrlK2L1MdqUCaz72THuaBsDXEAeCIUWJduYBaK521HO/UZ9UhtZowlbzLN/RoGhSDZ6eWTh3OcgmlHXqrhsw7s/GUb0AQbNTIM9sHiHYoC99573bXOPeVn5Ns3/AIukehqZr1boS6j7oUOi2+68ctSijcPMk4lPTgllghMz1TxK67Oqiu6bo3sTqZUP6YP8c0DoM6p4zyxVltx6jzsY8YiRjHyQOxsB6u2QPM8dfemRNrJEtLSHHcTvXHL6+tilaQpkESIMY8W9UnwUNgzC4YTr+uHqi/R60XKkHJw8vXFCgcOH16KVY2m91RN2T3YniIXC+wjpBvsrReGTjf78HDvk80VsLwHkg4EwOeLfKOahacYHUmPBmIM6y12HndPJJ0Q8GNxAz968DuyITX8Wjv8AosLkxWYCFIjBNP8ARSKFNtlGHvbsOzOSY8EOIhH7XS69+MHkieHZ9e9BbWyHFUiTkME9ad/ol0X+gPgmW5pLHx3oiE1jTKlWZjmw9s32uBGy5nlrBEngFFoHE9/kjljZffwZTbwwIjuHihJ4GishBxGBBwIBgzI3GcZ47U09Js7yabJ1CO7fzXPKeL+IJbBmjz9upfG1bbTyCw6zOi2Uz77PMLarPUwCTldUZZbHly9vBeKXYBi+l6jjaqrQYEjxa0p2jRHFe21o/qHuOu5j/o1HNDaBfVIc8FlPA44OeM4aNQP5t+E6tzdbM3lSQc6OOuWaTOJe4DcAG+JaVAYICPW+ncpOjAABoAyAJDYHLyVatda63fq36gs83eTf+PGkM2hxe4MGWv5KZTZAUeyUrok5lSHOhSZsS9i3KH7YG+3W0+YkJ0POKE2atefaNz2jubB8QUUK2Lef7VowmGeM/wDY5qvMeG1GuzDTqyggA+fijb3/ANq0RspjkXEFDrBYfasOoyYPDDFGwUO6as95jaoyODhsOQd4DwQUDEFWNlNxYaT847RGE6jhvg81XyzMceULkcxFzFEtCf5mjcR4H5KEMhgpmjDdqsdvI8I/5DxTUKF61K6HsGXaaPdJkDkQR3IXZhcqBs4S2JzgkRjrzR+2skB+Zbzluv0KC6YF0Me3Ubp82juHguTxRzXss5yTNemSLoMT3xr+t6XZ33mgr1rpx7uG3n8klFLINqss0y0ASII3EYiPJVHSbwSIzjFXO2VIBnfKpNtdJLsgThwTRROTIU5L0NzXsJZZ1Z2EcxIj1TEyRYjBa45fznyzVwsViHs31AZhtleCMml4qtew7wY8CqlZKRcLuucBxwJ7h4K2aGqltOtSnBxpkzl1C0Z8ygx0NOZdAHHxcUy5S7bgQNg9Soj08PFAn5AVjotVM7Hs8wthp1xAx1BY1WH2hkfnZHeFq1Ki6ATsCXkinRmkshb2q5RFyn1QAPZ9BAtZXY2854ZeMTdAAaY7s1bxo0ZznisfZpx7Krmh7wARAvGBAGQ2K59Fulri9lOqZa8hodra44NncSQOa2zqSMfEnGWfYa6S0wykJOLngRrgAme8N71SB13z+FvmrB060leeKbcbmGH5ngE9wjnKC2andbGoZ79yySZ63DGokgHX3JIF4ryZS3GMAk0XWRNWoGNc45NBJ5YlVno+8uFV5ze8u/UST5o/pWzvfZ6xZMU2Bzz7t4COOJPBpVc6PO/tOO153agmisE5P5USLS+Kdff7PzeiGhaVymwH8oJ54x4oXbWy0tH430h/+h9EaoggunIGByaB6FcxkSKlMOxOo4Qq3piy3H3gOq/XGR2c/mrE16j2+kHsI7jsIyXI5oqjREj6x/leUawDmnYQeYy811pJYS05/LUo1qbdOGRgjg7Eeo5KlkmX6k680awVXNOCGFh1Fl0n8WcHuwRLQVqv0mnWOqdkjDyg81G0/RvezdmWvx4QTq3tCT2M9BOzGGBu2Z+GTPy5qSX4BQLGerOvynUpDyuGRB0o/CBrw+arNvjII9bXySZy81XbU4F0JooSTGS3HXkE5RfmCMx/HnCbJgnhHjPopFnaHEHWYBB44Hhl3IiIn6LYQ4POQkyccMz3BWawUAHEATeJEATMk3oHMncg1hpGS0QWsOOuSchw19ysdge5jg5hh5wnD8XxYDigMDdIC68tJEtwOMiQTOOtRHlWTSDbSahdLAQAJv0JgNI1u993fwQW2Wiq2/SeSIJDmkNJBBxE55708cKhW7ZWqxi0sPvs/cFrRtADBwWT2+g9tSk8tIa9/UOpxY5odG2CQOa1CnZKj2i6zUMy1vmV0o2RcbYv+oXJP/xtX8o/Wz/2XJOp3RGbmg0uc4jEuOKfpv6zQ0wSQAdYM4HlmkWcSzHXJSLBScXndgOeZ7vNXk6Rmgu0kg9Sc6pUc9xmS4ydZJkuU6MIUelDQAEl9pnBqyNnrRVIkVKwbgF4wntOMbk3SpgYuxKatVaQglYe1Fz0JowVbDVE42lr2ycgIdTYOEy7/ZZnoOgQxzDgWvcHA5ggiQoeiuktoY90V6gaOqxoe4Na0EwA2YCP6HpCpaDJP9xntXmAOu49aIEYnE81RukRim5f0iV6cHg+jj+seoUitX7QbrLo5kxEI/V0FSdMuf1rsiR+GSDlniiujdCU6LRcEYAScTGyTio90aFxsqdCy134spuIG2G916JTT3uY669pbxGfA5Hkr3/Tnae9N1LGCCHAOBzBEg96Hd/Q3RfZl/SGzggVG6sDwOE9/mgxffZGZZPG7s5Z960i36IpPDmFsDEdXDDJAndEKbSHMqPO50d0gDDktq4ZVZjlJWV7QOkvZvLSeq7PccgfTuVgttcXmbLw8jCjO6N0/wATSx+INxxLczBAcDGEc5Tdp0W8tAa8OuxF7A4bSNfcpNU6Yyugn/UNk4gL02kHWq3aLFWbjEja0z/Mpii+oTdaCTs2cZyQoPZkvSOkGtJaMSceE4oQx8m9tyXtpsj7xluPf5KP1hmCDvwPcmEdsed9eSkUnw4cgmrJZXPPV/Ucgi7NFvpgG61/EnywROSYW6PwGmTiTOOeKsdkpNNRjXdkvYHYxgXAOx1YKp2a1OYOxMaw4HirHoe0te5hdjiARJE4gDEA7dmxBBZM01ox5rVHNszHNvReNUt1CBF8QcNir2lHvfWeXtAe95Ja2CLzjk2CZxO0ozp20sNSpT9m1wNS/N94cTcujKmREHehDHtY+81paW5Na97XNcMb18MkEQdSZCMV1awqWZuJszmV6RylrHNZahwdeD493ctSsGLBEZDMMP7lj50gynWDmte1zzBc20VWkgnEGKWI2iVr9iqAM4gazIjfCdaaJy2iXc95v6KfzXqZ9tv8T/6rktMFmIWbsjgpFj7RXq5NPRH8fzJ78l7Zs1y5ZGeoS6iH2vsngvVyaIGUWy9vmrvoz/LS+F37Vy5NPQnH5FodkOSO0uyOAXLll9m0WzJKK5cmFK/V7R+M+qj6jx9Fy5e5HxR5UvJg92Q+EJpy5cvO5fNmqGhi0ZJlmS5ckQWRWdsoXp3sO+ta9XI+xfRK0N/j5D1RpvZHD5Lly5hWiIzPvU/on/lHxFcuRQrJOmf89P4h5tQ2xf5udTycuXJ0TAVv7Vn+L1atus3ZP1rK5cmjsnM5cuXJyR//2Q==" alt="" class="rounded-circle" style="width: 40px; height:40px;">
                            <div style="line-height: 10px; margin-left: 25px;">
                              <p class="mb-1 mt-2 text-bold" style="">Ini HRD :V <span style="margin-left:132px; font-size:10px; color:grey; font-family:inter;">13:22</span></p>
                              <p class="mt-3" style="color:grey;">Agan HRD mengetik... <span class="whatsapp-message">2</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <div class="border-bottom d-flex" style="background-color: #fff; border-radius:15px;">
                                <img src="https://img.celebrities.id/okz/600/46YC3M/master_48t3I3KE4S_554_ryujin_itzy.jpg" alt="" class="rounded-circle mt-3 ml-2" style="width: 40px; height:40px;">
                                <div class="">
                                    <p class="mb-0 ml-2 mt-3 text-bold" style="">Ini HRD :V 
                                      <span class="" style="margin-left:400px;"><i class=" fas fa-video"></i>   
                                        <i class="ml-3 fas fa-phone-alt"></i>  
                                        <i class="ml-3 fas fa-bars"></i></span>
                                    </p>
                                    <p class="mt-0 ml-2" style="color:grey;">Online</p>
                                </div>
                            </div>
                            <div class="chat">
                              <div class="message">
                                <span class="sender">Ini HRD :V</span>
                                <span class="text">Hello, how are you?</span>
                                <span class="time">10:00 AM</span>
                              </div>
                              <div class="message"> 
                                <span class="sender">Ini HRD :V</span>
                                <span class="text">I'm good, thanks! How about you?</span>
                                <span class="time">10:02 AM</span>
                              </div>
                              <div class="message">
                                <span class="sender">Ini HRD :V</span>
                                <span class="text">I'm doing great too!</span>
                                <span class="time">10:05 AM</span>
                              </div><br><br><br><br><br><br><br>
                            </div>
                            <div class="input-container">
                              <input type="text" placeholder="Type a message..." >
                              <button>Send</button>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endSection()

<style>
    .whatsapp-message {
        display: inline-block;
        padding: 4px;
        border-radius: 50%;
        background-color: grey;
        color: white;
        font-size: 14px;
        text-align: center;
        margin-left: 70px;
    }


</style>

<style>
    .container {
      width: 400px;
      margin: 0 auto;
      background-color: #EDEDED;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .chat {
      padding: 10px;
    }
    .message {
      margin-bottom: 10px;
    }
    .message .sender {
      font-weight: bold;
    }
    .message .text {
      background-color: #e4f9ff;
      padding: 5px 10px;
      border-radius: 10px;
      display: inline-block;
    }
    .message .time {
      font-size: 12px;
      color: black;
      margin-left: 10px;
    }
    .input-container {
      padding: 8px;
      background-color: #0064DA;
      border-radius: 15px;
    }
    .input-container input {
      width: 87%;
      padding: 8px;
      border: none;
      border-radius: 4px;
    }
    .input-container button {
      background-color: #4caf50;
      color: #fff;
      border: none;
      padding: 8px 16px;
      margin-left: 9wpx;
      cursor: pointer;
    }
  </style>