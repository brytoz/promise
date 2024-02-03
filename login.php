<?php 
require('functions/query.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
   
    <title>Login</title>
</head>
<body>
  
     
    <div class="relative">
      <div class="relative bg-gradient-to-r from-[#003049]/70  via-[#003049]/80 to-[#003049]  bg-opacity-75 bg-position ">
        <svg
          class="absolute inset-x-0 bottom-0 text-white"
          viewBox="0 0 1160 163"
        >
          <path
            fill="currentColor"
            d="M-164 13L-104 39.7C-44 66 76 120 196 141C316 162 436 152 556 119.7C676 88 796 34 916 13C1036 -8 1156 2 1216 7.7L1276 13V162.5H1216C1156 162.5 1036 162.5 916 162.5C796 162.5 676 162.5 556 162.5C436 162.5 316 162.5 196 162.5C76 162.5 -44 162.5 -104 162.5H-164V13Z"
          />
        </svg>
        <div class="relative px-4 py-16 mx-auto overflow-hidden sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
          <div class="flex flex-col items-center justify-between xl:flex-row">
            <div class="w-full max-w-xl mb-12 xl:mb-0 xl:pr-16 xl:w-5/12">
              <h2 class="max-w-lg mb-6  text-3xl md:text-6xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                Login
              </h2>
              <p class="max-w-xl mb-4 text-base text-gray-200 md:text-lg">
                "name" guarantees that all transaction  are carried out at the most
                favorable prices, complemented by comprehensive quotes, creating
                a seamless and ideal experience for traders of any expertise
                level.
              </p>
            </div>
            <div class="w-full max-w-xl xl:px-8 xl:w-7/12">
              <div class="bg-white rounded shadow-2xl p-7 sm:p-10">
                <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl">
                Login
                </h3>
                
                <?php                  
    echo '<form action="'.login($conn).'"  method="POST"  >'; ?>
            
            <div class="flex justify-center ">
              
              <span id="info" class="text-center text-xl text-green-600 bold">

              </span>
            </div>

                  <div class="mb-1 sm:mb-2">
                    <label
                      html-for="user_id"
                      class="inline-block mb-1 font-medium"
                    >
                      User ID
                    </label>
                    <input
                      placeholder="User ID"
                      required
                      type="text"
                      class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                      id="username"
                      name="username"
                    />
                  </div>

                   

                  <div class="mb-1 sm:mb-2">
                    <label
                      html-for="password"
                      class="inline-block mb-1 font-medium"
                    >
                      Passcode
                    </label>
                    <input
                      placeholder="********"
                      required
                      type="password"
                      class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                      id="password"
                      name="password"
                    />
                  </div>
                  <div class="mt-4 mb-2 sm:mb-4">
                    <button
                      type="submit"
                      name="login_submit"
                      class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md  bg-gradient-to-r from-[#003049]/70  via-[#003049]/80 to-[#003049]  bg-opacity-75 only:bg-opacity-75 focus:shadow-outline focus:outline-none hover:bg-[#003049]/90"
                    > Login</button>
                  </div>
                  <div class="text-center flex-wrap justify-center">
                    <a href="#">
                      <p class="py-4 text-xs text-gray-600 sm:text-sm">
                        Forgot Password? Reset.
                      </p>
                    </a>
                    <a href="/">
                      <p class="text-xs text-gray-600 sm:text-sm cursor-pointer ">
                        Home
                      </p>
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>
</html>